function liveSearch(textBox){

    if(textBox.value == ""){
        document.getElementById("suggestion").innerHTML= "";
        return;
    }
    var xhr = new XMLHttpRequest();
    xhr.onreadystatechange =function(){
        if(this.readyState == 4 && this.status == 200){
            document.getElementById("suggestion").innerHTML = this.responseText;
        }
    };
    xhr.open("GET","searchBooks.php?name="+textBox.value,true);
    xhr.send();
}
$(document).ready(function(){
    $('#ssearchBox').keyup(function(){
        search_table($(this).val());

    });
    function search_table(value){
        $('#myTable tr').each(function(){

            var found = false;
            $(this).each(function(){
                if($(this).text().toLowerCase().indexOf(value.toLowerCase())>=0)
                {
                    found = 'true';
                }
            });
            if(found=='true'){
                $(this).show();
            }else{
                $(this).hide();
            }
        });
    }
});