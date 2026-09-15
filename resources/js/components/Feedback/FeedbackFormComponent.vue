<template>
    <div class="feedback-popup__content">
        <div class="" v-if="completed">
            Данные успешно отправлены, наш менеджер свяжется с вами в ближайшее время.
        </div>
        <form v-else @submit.prevent="store">
           <div class="feedback-popup__items">
               <div class="feedback-popup__item">
                   <InputField name="name" label="Имя" placeholder="Имя *" v-model="form.name" :errors="errors['name']"/>
               </div>
               <div class="feedback-popup__item">
                   <PhoneField name="phone" label="Ваш телефон" placeholder="Телефон *" v-model="form.phone" :errors="errors['phone']"/>
               </div>
               <button type="submit" class="btn">
                   Оставить заявку
                   <svg width="40" height="40" viewBox="0 0 40 40" fill="none" xmlns="http://www.w3.org/2000/svg">
                       <rect width="40" height="40" rx="4" fill="white" fill-opacity="0.16"/>
                       <path d="M14.5 13.5V15.5H23.09L13.5 25.09L14.91 26.5L24.5 16.91V25.5H26.5V13.5H14.5Z" fill="white"/>
                   </svg>
               </button>
           </div>
            <div class="feedback-popup__privacy" v-if="privacyPolicyLink">
                <CheckboxUi :label="privacyLabel" name="feedback" v-model="form.policy" :errors="errors['policy']"/>
            </div>

        </form>
    </div>
    <div class="loader-frame" v-if="loading">
        <div class="loader"></div>
    </div>
</template>

<script>
import InputField from "../Ui/Form/InputField.vue";
import PhoneField from "../Ui/Form/PhoneField.vue";
import CheckboxUi from "@/components/Ui/Form/CheckboxUi.vue"
import FeedbackMixin from "../../Share/Mixins/FeedbackMixin";

export default {
    name: "FeedbackFormComponent",
    components: {InputField, PhoneField, CheckboxUi},
    mixins: [FeedbackMixin],
    props: {
        privacyPolicyLink: null,
        personalDataLink: null,
        agreementLink: null,
    },
    data() {
        return {
            name: 'callback',
            form: {
                name: null,
                email: null,
                phone: null,
                policy: false,
            }
        }
    },
    computed: {
        privacyLabel() {
            return `Я подтверждаю ознакомление и даю <a href="${this.agreementLink}" target="_blank">Согласие на обработку моих персональных данных</a> в порядке и на условиях, указанных в <a href="${this.personalDataLink}" target="_blank">Политике обработки персональных данных</a> и <a href="${this.privacyPolicyLink}" target="_blank">Политике конфиденциальности</a>`;
        },
    },
    methods: {}
}
</script>

<style scoped>

</style>
