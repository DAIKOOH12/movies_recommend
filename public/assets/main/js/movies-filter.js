$(document).ready(function () {
    let filterUrl = window.location.origin + window.location.pathname;
    let originUrl = window.location.origin + window.location.pathname;
    let runTimeMin = "";
    let runTimeMax = "";
    let votedMin = "";
    let votedMax = "";
    let orderBy = "";

    $("#filter__runtime").on("change", function () {
        let selectedOption = $(this).find(":selected");
        runTimeMin = selectedOption.attr("data-gte") || "";
        runTimeMax = selectedOption.attr("data-lte") || "";
        filterUrl=originUrl;
    });

    $("#filter__rate").on("change", function () {
        let selectedOption = $(this).find(":selected");
        votedMin = selectedOption.attr("data-gte") || "";
        votedMax = selectedOption.attr("data-lte") || "";
        filterUrl=originUrl;
    });

    $("#filter__sort").on("change", function () {
        let selectedOption = $(this).find(":selected");
        orderBy = selectedOption.val() || "";
        filterUrl=originUrl;
    });

    $("#filter__btn").on("click", function () {
        if (
            runTimeMin == "" &&
            runTimeMax == "" &&
            votedMin == "" &&
            votedMax == "" &&
            orderBy == ""
        ) {
            Swal.fire({
                icon: "error",
                title: "Oops...",
                text: "You need to choose some filters!",
            });
        } else {
            if (runTimeMin != "") {
                filterUrl = filterUrl + "?";
                filterUrl =
                    filterUrl +
                    "min_time=" +
                    runTimeMin +
                    "&" +
                    "max_time=" +
                    runTimeMax;
            }

            if (votedMin != "") {
                if (runTimeMin != "") {
                    filterUrl += "&";
                    filterUrl =
                        filterUrl +
                        "vote_min=" +
                        votedMin +
                        "&" +
                        "vote_max=" +
                        votedMax;
                } else {
                    filterUrl =
                        originUrl +
                        "?vote_min=" +
                        votedMin +
                        "&" +
                        "vote_max=" +
                        votedMax;
                }
            }
            if (orderBy != "") {
                if (runTimeMin != "" || votedMin != "") {
                    filterUrl += "&";
                    filterUrl = filterUrl + "order_by=" + orderBy;
                } else {
                    filterUrl = originUrl + "?order_by=" + orderBy;
                }
            }
            window.location.href = filterUrl;
        }
    });
});
