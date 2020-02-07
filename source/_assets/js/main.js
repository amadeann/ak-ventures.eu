window.Vue = require("vue");

let svgComponents = {
    LinkedinIcon: "linkedin-icon",
    TwitterIcon: "twitter-icon",
};

for (let key in svgComponents) {
    if (svgComponents.hasOwnProperty(key)) {
        let anchor = svgComponents[key];
        Vue.component(anchor, require("./Components/Svg/" + key + ".js").default);
    }
}

Vue.component("contact-form", require("./Components/ContactForm.js").default);

new Vue({
    el: "#app"
});
