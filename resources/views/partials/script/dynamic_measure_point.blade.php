<script>
$(function(){
    "use strict";
    
    var optionData = new Object();//{};
    optionData.url = "{!! route('measurePoint.selectAllMeasurePoints', []) !!}";
    optionData.id = "#id";
    optionData.id_prefix = "measure_point_element_id";
    
    var form_hidden_input_group_0 = $("#form1_hidden_input_group");
    var form_hidden_input_group_1 = $("#form1_hidden_input_group_child_3_1_1_1");
    var form_hidden_input_group_2 = $("#form1_hidden_input_group_child_3_1_2_1");
    
    var activity_index_array = new Array("1", "2", "3");
    
    /*
    if( ($( optionData.id ).length) ){
        alert("The element you're testing is present.");
    }
    */
    
    var form_hidden_input_group_0_element = new Array();
    var form_hidden_input_group_1_element = new Array();
    var form_hidden_input_group_2_element = new Array();
    var element_value_temp = [];
    
    /*
    $(document).ready(function(){
        $("button").click(function(){
            $.ajaxSetup({
                url: "demo_ajax_load.txt", success: function(result){
                    $("div").html(result);
                }
            });
            $.ajax();
        });
    });
    */
    
    /*
    $(document).ready(function(){
        $("button").click(function(){
            $.getScript("demo_ajax_script.js");
        });
    });
    */
    
    /*
    $(document).ready(function(){
        personObj = new Object();
        personObj.firstname = "First Name";
        personObj.lastname = "Last Name";
        personObj.age = 50;
        personObj.eyecolor = "blue"; 
        $("button").click(function(){
            $("div").text($.param(personObj));
        });
    });
    */
    
    /*
    $(document).ready(function(){
        $(document).ajaxStart(function(){
            $("#wait").css("display", "block");
        });
        $(document).ajaxComplete(function(){
            $("#wait").css("display", "none");
        });
        $("button").click(function(){
            $("#txt").load("demo_ajax_load.asp");
        });
    });
    */
    
    /*
    $(document).ready(function(){
        $(document).ajaxSend(function(e, xhr, opt){
            $("div").append("<p>Requesting " + opt.url + "</p>");
        });
        $("button").click(function(){
            $("div").load("demo_ajax_load.asp");
        });
    });
    */
    
    /*
    $(document).ready(function(){
        $("button").click(function(){
            var x = $("form").serializeArray();
            $.each(x, function(i, field){
                $("#results").append(field.name + ":" + field.value + " ");
            });
        });
    });
    */
    
    /*
    var ajaxReq = $.ajax('GetJsonData', {
        dataType: 'json', 
        timeout: 500
    });

    ajaxReq.success(function (data, status, jqXhr) {
        $('p').append(data.firstName + ' ' + data.middleName + ' ' + data.lastName);
    })
                
    ajaxReq.error(function (jqXhr, textStatus, errorMessage) {
        $('p').append('Error: ' + errorMessage);
    })
    */
    
    function remove_array_element(array, n){
        var index = array.indexOf(n);
            if (index > -1) {
            array.splice(index, 1);
        }
        return array;
    }
    
    function createInputElement_1(data){
        //console.log( data );
        var id_prefix = optionData.id_prefix;
        var id_prefix_temp = (id_prefix + "_temp_");
        var temp_form_hidden_input_group_0 = form_hidden_input_group_0;
        var temp_form_hidden_input_group_1 = form_hidden_input_group_1;
        var temp_form_hidden_input_group_2 = form_hidden_input_group_2;
        var temp_activity_index_array = activity_index_array;
        
        var temp_id = (id_prefix_temp + data.id);
        var temp_parent_elemrnt_id = ("#" + temp_id);
        var temp_parent_elemrnt = $( temp_parent_elemrnt_id );
        
        var temporaryDataArray = new Array();
        temporaryDataArray = $(document).getMyStorageData( id_prefix );
        temporaryDataArray = (temporaryDataArray) ? temporaryDataArray : new Array();
        if( (!Array.isArray(temporaryDataArray)) ){
            temporaryDataArray = new Array();
        }
        
        /* --- */
        var temporaryDataArrayFiltered = temporaryDataArray.filter(function(element, index, filterArray, optionalData){
            return element != data.id;
        });

        temporaryDataArray = temporaryDataArrayFiltered;
        /* --- */
        
        if( ((temp_activity_index_array[0].localeCompare(data.activity_index)) == 0) ){
            //
            var tempObject = temp_parent_elemrnt.detach();
            /*
            var temp_parent_elemrnt_length = temp_form_hidden_input_group_1.find( ("#" + temp_parent_elemrnt.attr("id")) ).length;
            console.log( temp_parent_elemrnt_length );
            if( (temp_parent_elemrnt_length > 0) ){
                temp_form_hidden_input_group_1.find( ("#" + temp_parent_elemrnt.attr("id")) ).remove();
            }
            temp_parent_elemrnt.detach().appendTo( temp_form_hidden_input_group_1 );
            */
            temp_form_hidden_input_group_1.find( ("#" + temp_parent_elemrnt.attr("id")) ).remove();
            temp_form_hidden_input_group_2.find( ("#" + temp_parent_elemrnt.attr("id")) ).remove();
            tempObject.appendTo( temp_form_hidden_input_group_1 );
            //$(document).setMyStorageData(id_prefix, temporaryDataArray);
        }else if( ((temp_activity_index_array[1].localeCompare(data.activity_index)) == 0) ){
            //
            var tempObject = temp_parent_elemrnt.detach();
            /*
            var temp_parent_elemrnt_length = temp_form_hidden_input_group_2.find( ("#" + temp_parent_elemrnt.attr("id")) ).length;
            console.log( temp_parent_elemrnt_length );
            if( (temp_parent_elemrnt_length > 0) ){
                temp_form_hidden_input_group_2.find( ("#" + temp_parent_elemrnt.attr("id")) ).remove();
            }
            temp_parent_elemrnt.detach().appendTo( temp_form_hidden_input_group_2 );
            */
            temp_form_hidden_input_group_1.find( ("#" + temp_parent_elemrnt.attr("id")) ).remove();
            temp_form_hidden_input_group_2.find( ("#" + temp_parent_elemrnt.attr("id")) ).remove();
            /*
            tempObject.appendTo( temp_form_hidden_input_group_2 );
            temporaryDataArray.push( data.id );
            */
            var temp_parent_elemrnt_array = temp_form_hidden_input_group_2.find( ("." + id_prefix) );
            if( (temp_parent_elemrnt_array) && (temp_parent_elemrnt_array.length >= 0) ){
                $.each(temp_parent_elemrnt_array, function(index, value){
                    $(value).trigger("click");
                });
            }
            tempObject.appendTo( temp_form_hidden_input_group_2 );
            temporaryDataArray.push( data.id );
            
            var id_nav_link_3_2 = $("#id_nav_link_3_2_modal_1");
            id_nav_link_3_2.tab("show");
            //$(document).setMyStorageData(id_prefix, temporaryDataArray);
        }else if( ((temp_activity_index_array[2].localeCompare(data.activity_index)) == 0) ){
            //
            /*
            var temp_parent_elemrnt_length = form_hidden_input_group_0.find( ("#" + temp_parent_elemrnt.attr("id")) ).length;
            if( (temp_parent_elemrnt_length > 0) ){
                form_hidden_input_group_0.find( ("#" + temp_parent_elemrnt.attr("id")) ).remove();
            }
            */
        }
        $(document).setMyStorageData(id_prefix, temporaryDataArray);
        //element.find( ("#" + id_prefix_input + data.id) ).remove();
    }
    
    var ajaxRequest_ = null;
    window.ajaxRequest_MeasurePoint = ajaxRequest_ = function(){
        var request = $.ajax({
            url: optionData.url,
            cache: false,
            quietMillis: 10,
            //dataType: 'json',
            delay: 10,
            method: "GET",
            //crossDomain: true,
            //timeout: 0,
            //context: document.body,
            //encode: true,
            //processData: false,
            //contentType: false,
            data : {
                //'key': 'value',
            },
            beforeSend: function( xhr ) {
                //xhr.overrideMimeType( "text/plain; charset=x-user-defined" );
            },
            statusCode: {
                404: function() {
                    //console.log( "page not found" );
                }
            }
        }); 
            request.done(function(data) {
                //console.log("done");
                //console.log(data);
                var id_prefix = optionData.id_prefix;
                var id_prefix_temp = (id_prefix + "_temp_");
                var temp_form_hidden_input_group_0 = form_hidden_input_group_0;
                var temp_form_hidden_input_group_1 = form_hidden_input_group_1;
                var temp_form_hidden_input_group_2 = form_hidden_input_group_2;
                var temp_activity_index_array = activity_index_array;

                var data_data = data.data;
                temp_form_hidden_input_group_2.data("element_data", data_data);
                temp_form_hidden_input_group_1.empty();

                if( (data_data == void(0)) || (data_data.length <= 0) ){
                    //console.log("data_data.length");
                }else{
                    $.each(data_data, function(index, value){
                        //console.log(index);
                        //console.log(value);
                        var div_1 = $("<div></div>");
                        var div_2 = $("<div></div>");
                        var div_3 = $("<div></div>");
                        var button_1 = $("<button></button>");
                        var span_1 = $("<span></span>");
                        var colour_code = null;

                        var temp_id = (id_prefix_temp + value.id);

                        div_1.attr("id", temp_id);
                        div_1.addClass("d-inline-flex align-self-start col col-6 col-sm-6 col-md-3 col-lg-3 col-xl-3 p-0");
                        div_2.addClass("col p-0");
                        div_3.addClass("btn-group btn-group-lg w-100 p-1");
                        //button_1.addClass("btn btn-lg");
                        button_1.addClass("btn btn-primary btn-lg");
                        span_1.addClass("text-wrap text-break");

                        button_1.removeClass(id_prefix);
                        button_1.addClass(id_prefix);

                        span_1.text(value.code);
                        if( (value.colour) ){
                            var colour = value.colour;
                            colour_code = colour.code;
                        }
                        button_1.css({"background-color": colour_code});

                        //$(selector).attr({attribute:value, attribute:value});
                        button_1.data("is_selected", false);

                        button_1.attr("value", function(index, currentvalue){
                            return value.id;
                        });

                        button_1.off("click").on("click", function(event){
                            event.preventDefault();
                            //event.stopPropagation();
                            button_1.attr("disabled", true);
                            //var temp_activity_index_array = activity_index_array;
                            var is_selected = null;
                            is_selected = button_1.data("is_selected");
                            var tempData = new Object();
                            tempData.id = value.id;
                            //tempData.temp_id = temp_id;
                            //tempData.temp_parent_elemrnt = div_1;

                            if( (is_selected != void(0)) && (is_selected == true) ){
                               button_1.data("is_selected", false);
                               tempData.activity_index = temp_activity_index_array[0];
                               createInputElement_1( tempData );
                            }else{
                               button_1.data("is_selected", true);
                               tempData.activity_index = temp_activity_index_array[1];
                               createInputElement_1( tempData );
                            }
                            button_1.attr("disabled", false);
                        });
                        
                        if( (value == void(0)) || (value.length <= 0) ){
                            //console.log("value.length");
                        }else{
                            $.each(value, function(index_value, value_value){
                                //console.log(index_value);
                                //console.log(value_value);
                                div_1.data(index_value, value_value);
                            });
                        }
                        
                        button_1.append(span_1);
                        div_3.append(button_1);
                        div_2.append(div_3);
                        div_1.append(div_2);
                        temp_form_hidden_input_group_1.append(div_1);
                    });
                    
                    //temp_form_hidden_input_group_2.data("element_data", data_data);
                }
            });
            request.fail(function() {
                //console.log("fail");
            });
            request.always(function() {
                //console.log("always");
            });
    }
    
    ajaxRequest_();
});
</script>