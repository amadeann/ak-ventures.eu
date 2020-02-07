import autosize from "autosize";

const axios = require('axios');

export default {
    data() {
        return {
            showForm: true
        };
    },
    methods: {
        submit(e) {
            // Solution for submitting the form from:
            // https://stackoverflow.com/a/44760167/4171578
            let form = e.target;
            let formData = new FormData(form);
            let data = {};
            for (let [key, val] of formData.entries()) {
              Object.assign(data, { [key]: val })
            }
            let endpoint = form.getAttribute("action");
            console.log("submitting form to endpoint: " + endpoint);
            axios.post(endpoint, data)
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
