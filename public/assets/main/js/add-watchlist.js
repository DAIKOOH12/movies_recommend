$(document).ready(function () {
    let movieId = "";
    $("[name=addbutton]").on("click", function () {
        movieId = $(this).attr("data-movie-id");

        fetch("./mvr/watchlist", {
            method: "GET",
            headers: {
                "X-CSRF-TOKEN": $('meta[name="csrf-token"]').attr("content"),
            },
        })
            .then((response) => response.json())
            .then((data) => {
                xml = "";
                for (let i = 0; i < data.length; i++) {
                    xml += `<div class="form-check" data-movie-id="${movieId}">`;
                    xml += `<input class="form-check-input" type="checkbox" data-id="${data[i]["wishlist_id"]}" id="flexCheckDefault${i}">`;
                    xml += `<label class="form-check-label" for="flexCheckDefault${i}" >${data[i]["wishlist_title"]}</label>`;
                    xml += `</div>`;
                }
                $(".modal-body").append(xml);
            })
            .catch((error) => {
                console.log(error);
            });
    });

    $("#addWatchlist").on("click", function () {
        var row = $(this)
            .parents(".form-group")
            .siblings(".modal-body")
            .children();
        var movieId = row[0].getAttribute("data-movie-id");
        var watchlistId = [];

        for (var i = 0; i < row.length; i++) {
            if (row[i].children[0].checked) {
                watchlistId.push(row.eq(i).children().eq(0).attr("data-id"));
            }
        }

        if (watchlistId.length == 0) {
            Swal.fire({
                icon: "error",
                title: "Oops...",
                text: "No watchlist selected!",
            });
        } else {
            let formData = new FormData();
            formData.append("movieId", movieId);
            formData.append("watchlistId", watchlistId);
            fetch("./mvr/addtowatchlist", {
                method: "POST",
                headers: {
                    "X-CSRF-TOKEN": $('meta[name="csrf-token"]').attr(
                        "content"
                    ),
                },
                body: formData,
            })
                .then((response) => response.json())
                .then((data) => {
                    $("#addNewPlaylist").modal('toggle');
                    $(".modal-body").empty();
                    toastr.success("Added to watchlist");
                })
                .catch((error) => {
                    console.log(error);
                });
        }
    });
});
