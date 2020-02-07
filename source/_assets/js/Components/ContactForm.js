import autosize from "autosize";

const axios = require('axios');

export default {
    data() {
        return {
            showForm: true
        };
    },
    methods: {
        encode (data) {
            return Object.keys(data)
                .map(
                    key => `${encodeURIComponent(key)}=${encodeURIComponent(data[key])}`
                )
                .join("&");
        },
        submit(e) {
            // solution from:
            // https://www.netlify.com/blog/2018/09/07/how-to-integrate-netlify-forms-in-a-vue-app/
            const axiosConfig = {
                header: { "Content-Type": "application/x-www-form-urlencoded" }
            };
            // Solution for submitting the form from:
            // https://stackoverflow.com/a/44760167/4171578
            let form = e.target;
            let formData = new FormData(form);
            // console.log(JSON.stringify(Object.fromEntries(formData)));
            axios.post(
                "/", 
                this.encode({
                    "form-name": "ask-question",
                    ...JSON.stringify(Object.fromEntries(formData))
                }),
                axiosConfig)
                .then(res => {
                    console.log("successfully submitted");
                    // console.log(res.request.response)
                    this.showForm = false;
                })
                .catch(error => {
                    console.log("failed to submit");
                    console.log(error);
                    // handle error
                    // console.log(error);
                    this.showForm = true;
                })
        },
        reset(e) {
            this.showForm = true;
        }
    },
    render() {
        return this.$scopedSlots.default({
            submit: this.submit,
            reset: this.reset,
            showForm: this.showForm,
        });
    },
    mounted() {
        autosize(this.$el.querySelector(".autosizeable"));
    }
};
