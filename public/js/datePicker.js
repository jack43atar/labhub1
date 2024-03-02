$(document).ready(function () {
    let currentSum;
    let dif;
    let daySelect;
    var currency = $(".active-lab-type .lab_type_price span").text();
    var picker = new Lightpick({
        field: document.getElementById("datepicker"),
        singleDate: false,

        onSelect: function (start, end) {
            let startDate = "";
            let endDate = "";

            startDate += start ? start.format("DD/MM/YYYY") : "";
            endDate += end ? end.format("DD/MM/YYYY") : "";

            let start1Date = startDate.split("/");
            let end1Date = endDate.split("/");

            let startYear = parseInt(start1Date[2]);
            let startMonth = parseInt(start1Date[1]);
            let startDay = parseInt(start1Date[0]);
            let endYear = parseInt(end1Date[2]);
            let endMonth = parseInt(end1Date[1]);
            let endDay = parseInt(end1Date[0]);

            let start2Date = new Date(startYear, startMonth, startDay);
            let end2Date = new Date(endYear, endMonth, endDay);

            let startDateDays = Math.ceil(
                start2Date.getTime() / (1000 * 60 * 60 * 24)
            );
            let endDateDays = Math.ceil(
                end2Date.getTime() / (1000 * 60 * 60 * 24)
            );

            dif = endDateDays - startDateDays;

            document.getElementById("daysCount").value = dif;
            if (startDate && endDate) {
                document.getElementById("start_date").innerHTML = startDate;
                document.getElementById("end_date").innerHTML = endDate;
            }
            //your_total-price

            if (dif >= 0) {
                if (currentSum) {
                    var totalCount = currentSum * dif;
                    daySelect = $("#full-and-part_select").val();
                    if (daySelect === "1") {
                        document.getElementById("total_balance").innerHTML =
                            "$ " + totalCount;
                        document.getElementById("your_total-price").innerHTML =
                            "$ " + totalCount;
                    } else if (daySelect === "2") {
                        document.getElementById("total_balance").innerHTML =
                            "$ " + totalCount / 2;
                        document.getElementById("your_total-price").innerHTML =
                            "$ " + totalCount / 2;
                    } else if (daySelect === "3") {
                        document.getElementById("total_balance").innerHTML =
                            "$ " + totalCount / 2;
                        document.getElementById("your_total-price").innerHTML =
                            "$ " + totalCount / 2;
                    }
                } else {
                    $(".lab_type_box").on("click", function () {
                        currentSum = parseInt(
                            $(this).find(".price_sum").html()
                        );
                        var totalCount = currentSum * dif;

                        daySelect = $("#full-and-part_select").val();
                        if (daySelect === "1") {
                            document.getElementById("total_balance").innerHTML =
                                "$ " + totalCount.toString();
                            document.getElementById(
                                "your_total-price"
                            ).innerHTML = "$ " + totalCount.toString();
                        } else if (daySelect === "2") {
                            document.getElementById("total_balance").innerHTML =
                                "$ " + totalCount.toString() / 2;
                            document.getElementById(
                                "your_total-price"
                            ).innerHTML = "$ " + totalCount.toString() / 2;
                        } else if (daySelect === "3") {
                            document.getElementById("total_balance").innerHTML =
                                "$ " + totalCount.toString() / 2;
                            document.getElementById(
                                "your_total-price"
                            ).innerHTML = "$ " + totalCount.toString() / 2;
                        }
                    });
                }
                daySelect = $("#full-and-part_select").val();
                if (daySelect === "1") {
                    document.getElementById("days_result").innerHTML =
                        dif + " Full Days";
                } else if (daySelect === "2") {
                    document.getElementById("days_result").innerHTML =
                        dif + " Part Days";
                } else if (daySelect === "3") {
                    document.getElementById("days_result").innerHTML =
                        dif + " Part Days";
                }
            }
        },
    });

    $("#full-and-part_select").change(function () {
        var daysCount = document.getElementById("daysCount").value;
        if ($(this).val() === "1") {
            document.getElementById("days_result").innerHTML =
                daysCount + " Full Days";
            if (dif && currentSum) {
                document.getElementById("total_balance").innerHTML =
                    "$ " + dif * currentSum;
                document.getElementById("your_total-price").innerHTML =
                    "$ " + dif * currentSum;
            }
        } else if ($(this).val() === "2") {
            document.getElementById("days_result").innerHTML =
                daysCount + " Part Days";
            if (dif && currentSum) {
                document.getElementById("total_balance").innerHTML =
                    "$ " + (dif * currentSum) / 2;
                document.getElementById("your_total-price").innerHTML =
                    "$ " + (dif * currentSum) / 2;
            }
        } else if ($(this).val() === "3") {
            document.getElementById("days_result").innerHTML =
                daysCount + " Part Days";
            if (dif && currentSum) {
                document.getElementById("total_balance").innerHTML =
                    "$ " + (dif * currentSum) / 2;
                document.getElementById("your_total-price").innerHTML =
                    "$ " + (dif * currentSum) / 2;
            }
        }
    });

    /* CHOOSE THE LOCATION */

    $(".filter_category").on("change", function () {
        let currentValue = $(this).val();
        $(".lab_type").fadeOut(0);
        $(".lab_type." + currentValue).fadeIn(300);
    });

    $(".lab_type_box").click(function (e) {
        $(this)
            .css({ backgroundColor: "#700203" })
            .siblings()
            .css({ backgroundColor: "#70020300" });
        let currentValue = $(this)
            .find(".lab_type_price h3")
            .text()
            .replace("$", "");
        let currentStr = $(this).find(".lab_type_str").text();
        $(".total_balance").text("$" + +$(".days").text() * +currentValue);
        $(".lab_type_select_str").text(`${currentStr.slice(0, 50)}`);
    });
});
