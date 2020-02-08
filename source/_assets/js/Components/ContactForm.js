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
            // combined with:
            // https://stackoverflow.com/a/55874235/4171578
            const axiosConfig = {
                header: { "Content-Type": "application/x-www-form-urlencoded" }
            };
            let form = e.target;
            let formData = new FormData(form);
            axios.post(
                "/", 
                this.encode({
                    "form-name": "contact",
                    ...Object.fromEntries(formData)
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
