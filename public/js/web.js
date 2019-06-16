$(document).ready(function() {
    $("#new-signup").click(function() {
        $("span.signup-div").hide();
        $("span.new-signup-div").show();
    });
    $("#signup").click(function() {
        $("span.new-signup-div").hide();
    });
    $("#signup").click(function() {
        $("span.signup-div").show();
    });

    $("#customer-new-signup").click(function() {
        $("span.customer-signup").hide();
    });
    $("#customer-new-signup").click(function() {
        $("span.customer-new-signup").show();
    });

    $("#customer-signup").click(function() {
        $("span.customer-new-signup").hide();
    });
    $("#customer-signup").click(function() {
        $("span.customer-signup").show();
    });

    $("#customer-login").click(function() {
        $("#vendor-div").hide();
    });
    $("#customer-login").click(function() {
        $("#customer-div").show();
    });

    $("#vendor-login").click(function() {
        $("#customer-div").hide();
    });
    $("#vendor-login").click(function() {
        $("#vendor-div").show();
    });
    $('.categ').selectpicker();
    
});