$(function () {
    $('#open_modal_A').click(function(){
        $('#modal_area_A').fadeIn();
    });
    $('#open_modal_B').click(function(){
        $('#modal_area_B').fadeIn();
    });
    $('#open_modal_C').click(function(){
        $('#modal_area_C').fadeIn();
    });
    $('#open_modal_D').click(function(){
        $('#modal_area_D').fadeIn();
    });

    $('#modal_bg_A').click(function(){
        check_point();
        $('#modal_area_A').fadeOut();
    });
    $('#modal_bg_B').click(function(){
        check_point();
        $('#modal_area_B').fadeOut();
    });
    $('#modal_bg_C').click(function(){
        check_point();
        $('#modal_area_C').fadeOut();
    });
    $('#modal_bg_D').click(function(){
        check_point();
        $('#modal_area_D').fadeOut();
    });
});

//default config
function check_point(){
    var font_size = 19;
    var top_type = 0;
    var left_type = 1;
    var right_type = 0;
    var bottom_type = 1;

    var top_size = 0;
    var left_size = 11;
    var right_size = 0;
    var bottom_size = 2;

    var top_padding = 6;
    var left_padding = 6;
    var right_padding = 6;
    var bottom_padding = 6;

    var top_color = "#006a27";
    var left_color = "#006a27";
    var right_color = "#006a27";
    var bottom_color = "#006a27";

    var font_color = "#000000";
    var bg_color = "#e9e9e9";
    var font_position_select = 0;

    $("#top_border").find("option").eq(top_type).attr("selected", "selected");
    $("#left_border").find("option").eq(left_type).attr("selected", "selected");
    $("#right_border").find("option").eq(right_type).attr("selected", "selected");
    $("#bottom_border").find("option").eq(bottom_type).attr("selected", "selected");

    $("#top_boder_size").find("option").eq(top_size).attr("selected", "selected");
    $("#left_boder_size").find("option").eq(left_size).attr("selected", "selected");
    $("#right_boder_size").find("option").eq(right_size).attr("selected", "selected");
    $("#bottom_boder_size").find("option").eq(bottom_size).attr("selected", "selected");

    $("#top_padding_size").find("option").eq(top_padding).attr("selected", "selected");
    $("#left_padding_size").find("option").eq(left_padding).attr("selected", "selected");
    $("#right_padding_size").find("option").eq(right_padding).attr("selected", "selected");
    $("#bottom_padding_size").find("option").eq(bottom_padding).attr("selected", "selected");

    $('#top_boder_color').val(top_color);
    $('#left_boder_color').val(left_color);
    $('#right_boder_color').val(right_color);
    $('#bottom_boder_color').val(bottom_color);

    $('#font_color').val(font_color);
    $('#bg_color').val(bg_color);

    $("#font_seize_select").find("option").eq(font_size).attr("selected", "selected");
    $("#font_position_select").find("option").eq(font_position_select).attr("selected", "selected");
}