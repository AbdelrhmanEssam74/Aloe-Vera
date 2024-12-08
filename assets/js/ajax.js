$(document).ready(function () {
    const host = "http://localhost:800/";
    $.ajax({
        url: host + "products",
        method: "Get",
        success: function (data) {
            console.log(data)
        },
        error: function (jqXHR, textStatus, errorTh) {
            console.error(jqXHR, textStatus, errorTh)
        }
    })
});