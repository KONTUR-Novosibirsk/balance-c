<template>
    <div class="">
        <div class="form-check">
            <div class="form-check-content">
                <input
                    type="checkbox"
                    :id="forName"
                    class="hidden-checkbox"
                    :checked="modelValue"
                    @change="updateInput"
                />
                <label :for="forName" class="custom-checkbox">
                  <span class="checkbox-box">
                    <span v-if="modelValue" class="checkbox-checkmark">
                       <svg width="16" height="12" viewBox="0 0 16 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M1 6L6 11L14.3333 1" stroke="#1D1714" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                       </svg>
                    </span>
                  </span>
                    <span class="checkbox-label" v-html="label"></span>
                </label>
            </div>

            <div v-if="errors?.length" class="invalid-feedback">
                <div v-for="(error, i) in errors" :key="i">{{ error }}</div>
            </div>
        </div>
    </div>
</template>

<script>
export default {
    name: "CheckboxUi",
    props: {
        label: String,
        name: String,
        modelValue: Boolean,
        errors: {
            type: Array,
            default: null,
        },
    },
    computed: {
        forName() {
            return 'checkbox_' + this.name;
        }
    },
    methods: {
        updateInput(event) {
            this.$emit('update:modelValue', event.target.checked);
        }
    }
};
</script>

<style>
.hidden-checkbox {
    position: absolute;
    opacity: 0;
    width: 26px;
    height: 26px;
    cursor: pointer;
}

.form-check-content {
    position: relative;
}

.custom-checkbox {
    display: flex !important;
    cursor: pointer;
    user-select: none;
}

.checkbox-box {
    width: 26px;
    height: 26px;
    display: flex;
    align-items: center;
    flex-shrink: 0;
    justify-content: center;
    margin-right: 12px;
    border-radius: 4px;
    background-color: transparent;
    border: 1px solid #FFFFFF;
    transition: background 0.2s, border-color 0.2s;
}

.checkbox-checkmark {
    font-size: 14px;
    display: flex;
    justify-content: center;
    align-items: center;
    width: 100%;
    background: #ffffff;
    height: 100%;
}
.invalid-feedback {
    color: red;
    font-size: 0.875em;
    margin-top: 4px;
}
</style>
