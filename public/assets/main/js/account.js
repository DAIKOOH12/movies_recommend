$(document).ready(function () {
    $("#btnSignUp").on("click", function () {
        let firstName = $("input[name=firstname]").val();
        let lastName = $("input[name=lastname]").val();
        let userName = $("input[name=username]").val();
        let email = $("input[name=email]").val();
        let password = $("input[name=password]").val();
        let confirmPassword = $("input[name=re-password]").val();

        let formData = new FormData();
        formData.append("firstname", firstName);
        formData.append("lastname", lastName);
        formData.append("username", userName);
        formData.append("email", email);
        formData.append("password", password);

        // fetch("./signup", {
        //     method: "POST",
        //     body: formData,
        //     headers: {
        //         "X-CSRF-TOKEN": $('meta[name="csrf-token"]').attr("content"),
        //     },
        // })
        // .then((response) => response.json())
        // .then((data) => {
        //     console.log(data);
        // })
        // .catch((error) => {
        //     console.log(error);
        // });
    });
});
