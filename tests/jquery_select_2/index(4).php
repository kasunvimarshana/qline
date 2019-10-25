<!-- ----------------------------------------------------------------------------------- -->
<script>
// Or for multiple select elements:
$("#tags").select2({
    initSelection : function (element, callback) {
        var data = [];
        $(element.val().split(",")).each(function () {
            data.push({id: this, text: this});
        });
        callback(data);
    }
});

// Or for single select elements:
$("#select").select2({
    initSelection : function (element, callback) {
        var data = {id: element.val(), text: element.val()};
        callback(data);
    }
});
</script>
<!-- ----------------------------------------------------------------------------------- -->