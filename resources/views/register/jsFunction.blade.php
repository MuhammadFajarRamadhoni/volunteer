<script>
    function loadDataRegencies(){
        $.ajax({
            url: "{{ url('get-data-regencies') }}",
            type: 'GET',
            dataType: 'json',
            data: {
                'province_id' : $("#province").val()
            },
            success: function(response) {
                console.log(response);
                /** Memuat data regencies untuk dimasukkan ke element select regencies **/
                $("#city").empty();
                $("#city").append(`
                        <option disabled selected hidden>Please select city</option>
                    `)
                $.each(response, function(index) {
                    $("#city").append(`
                        <option value="`+ response[index].id +`">` + response[index].name + `</option>
                    `)
                });
            }
        });
    }
    
</script>