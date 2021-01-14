function zad1() {
    let a = $("#num1").val();
    let b = $("#num2").val();
    $.ajax({
        type: "post",
        url: "z1.php",
        data: {
            "a": a,
            "b": b
        },
        success: function (response) {
            $("#res").val(response);
        }
    });
};

function zad2() {
    let a1 = $('input[name=rad]:checked').val();
    let a3 = $("#sel option:selected").val();
    let arr = [];
    $('input[name=check]:checked').each(function () {
        arr.push(+this.value);
    });
    let a2 = 0;
    for (let i = 0; i < arr.length; i++) {
        if (arr[i] === 1) a2++;
    }

    $.ajax({
        url: "z2.php",
        method: "POST",
        data: {
            "a1": a1,
            "a2": a2,
            "a3": a3
        },
        success: function (response) {
            if (response == 4) {
                $("#res2").css("background", "green");
            } else {
                if (response == 0) {
                    $("#res2").css("background", "red");
                } else {
                    $("#res2").css("background", "yellow");
                }
            }
            $("#res2").val(response);
        }
    });

}

function zad3() {
    let a = $('#a').val();
    let b = $('#b').val();
    let h = $('#h').val();
    let y = $('#y').val();
    let formula = 0;
    if ($('#check1').prop('checked') == true && $('#check3').prop('checked') == true) {
        formula = 1;
    } else {
        if ($('#check1').prop('checked') == true && $('#check2').prop('checked') == 0 && $('#check4').checked == true) {
            formula = 2;
        }
    }
    if (formula === 0) {
        alert('Недостаточно данных')
    } else {
        $.ajax({
            type: "method",
            url: "z3.php",
            data: {
                "a": a,
                "b": b,
                "y": y,
                "h": h,
                "f": formula
            },
            success: function (response) {
                $('#res3').val(response);
            }
        });
    }

}