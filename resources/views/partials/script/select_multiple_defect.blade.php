<script>
$(function(){
    "use strict";
    //$.fn.select2.defaults.set("key", "value");
    //$.fn.select2.defaults.set("theme", "classic");
    //$.fn.select2.defaults.set("ajax--cache", false);
    //$.fn.select2.defaults.reset();
    
    //$.fn.select2.defaults.set( "theme", "bootstrap" );
    /*$('#id').select2({
        theme: "bootstrap"
    });*/
    var optionData = new Object();//{};
    optionData.url = "{!! route('defect.selectAllDefects', []) !!}";
    optionData.id = "#defect_id";
    
    /*
    if( ($( optionData.id ).length) ){
        alert("The element you're testing is present.");
    }
    */
    
    function getFormatResult(param){
        if (!param.id){
            return param.text; // optgroup
        }
        var colour_code = null;
        if( (param.data) ){
            var data = param.data;
            if( (data.defect_category) ){
                var defect_category = data.defect_category;
                if( (defect_category.colour) ){
                    var colour = defect_category.colour;
                    colour_code = colour.code;
                }
            }else if( (data.colour) ){
                var colour = data.colour;
                colour_code = colour.code;
            }
        }

        var tempOptionObject = "<div class='text-wrap text-break w-100 h-100 m-1' style='background-color:"+colour_code+"'>"
            + "<p class='text-center'>" + param.text + "</p>"
            + "</div>";

        var optionObject = $(tempOptionObject);
        return optionObject;
    }
    
    var selectOptionObject = $( optionData.id ).select2({
        theme : 'bootstrap',
        //disabled : false,
        scrollAfterSelect : false,
        closeOnSelect : false,
        //containerCssClass : ':all:',
        //dropdownCssClass : 'class',
        width : 'resolve',
        allowClear : true,
        formatResult : getFormatResult,
        formatSelection : getFormatResult,
        templateResult : function(data) {
            return getFormatResult(data);
        },
        templateSelection : function(data) {
            return getFormatResult(data);
        },
        placeholder	: {
            //id : '-1',
            placeholder : 'Option'
        },
        //tags : [],
        //tokenSeparators : [],
        //maximumInputLength: 0,
        //maximumSelectionLength: 0,
        //minimumInputLength : 2,
        //minimumResultsForSearch: -1,
        minimumResultsForSearch: Infinity,
        //dropdownAutoWidth: false,
        //dropdownCss: false,
        multiple : true,
        escapeMarkup : function (markup) { return markup; },
        data : [],
        //data : function(){ return {results: selections} },
        ajax : {
            url : optionData.url,
            cache : false,
            quietMillis: 10,
            // dataType: 'json',
            delay : 10,
            data : function (params) {
                var query = {
                    search : params.term, // $.trim(params.term)
                    active : true,
                    page : params.page || 1,
                    length : 10
                }
                
                var elementObject = $( optionData.id );
                var elementObjectData = new Object();
                var elementObjectDataTemp = new Object();
                elementObjectDataTemp = elementObject.data();
                //elementObject.removeData();
                
                if( elementObjectDataTemp.hasOwnProperty('defect_category_id') ){
                    query.defect_category_id = elementObjectDataTemp.defect_category_id;
                }
                
                return query;
            },
            //results : function(data, params){},
            processResults : function (data, params) {
                //params.page = params.page || 1;
                return {
                    results : $.map(data.data, function (obj) {
                        return { 
                            id : obj.id, 
                            text : ( obj.name || obj.code ), 
                            data: obj 
                        };
                    }),
                    pagination : {
                        //more: (params.page * data.length) < Number(data.recordsTotal)
                        more : data.pagination.more
                    }
                };
            }
        },
        //initSelection: function(element, callback) {},
        //sortResults: function(results, container, query) {},
        /*query: function (query) {
            var data = {results: []}, i, j, s;
            for (i = 1; i < 5; i++) {
                s = "";
                for (j = 0; j < i; j++) {s = s + query.term;}
                data.results.push({id: query.term + i, text: s});
            }
            query.callback(data);
        }*/
    });//.select2('val', []);
    
    //<select class="select2" data-minimum-results-for-search="Infinity"></select>
    selectOptionObject.on('select2:opening select2:closing select2:open select2:close', function( event ) {
        //console.log(event);
        var searchfield = $(this).parent().find('.select2-search__field');
        searchfield.prop('disabled', true);
        
        $(this).parent().find('.select2-search--inline').remove();
        //readonly on all select2 input
        $(".select2-search input").prop("readonly", true);
        $(".select2-search, .select2-focusser").remove();
    });
});
</script>