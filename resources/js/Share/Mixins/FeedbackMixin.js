import {useRecaptchaStore} from "../../Stores/GoogleRecaptcha";

export default {
    props: {
        privacyPolicyLink: null,
    },
    data() {
        return {
            name: '',
            goal: null,
            completed: false,
            loading: false,
            errors: [],
        }
    },
    mounted() {

    },
    methods: {
        async generateToken() {
            this.form['g_recaptcha_token'] = await useRecaptchaStore().generateToken('feedback')
        },
        reachGoal() {
            if (this.goal && typeof ym === 'function') {
                try {
                    ym(113119809, 'reachGoal', this.goal)
                } catch (e) {
                }
            }
        },
        async store() {
            this.loading = true
            await this.generateToken()
            axios.post('/feedback/store/' + this.name, this.form).then((response) => {
                this.completed = true
                this.reachGoal()
            }).catch((error) => {
                if (error.response['status'] === 422) {
                    this.errors = error.response.data.errors
                }
            }).finally(() => {
                this.loading = false
            })
        }
    },
}
