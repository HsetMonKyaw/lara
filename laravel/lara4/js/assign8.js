$(document).ready(function(){

    console.log($('#addbtn'));
    var i=1;
    var j=0;
    
    $('#addbtn').click(function(event){
        event.preventDefault();
        // console.log("Button is clicked");
    
          formValidation();
    })
    
    var formValidation =() =>{
        let degree=$('#degree'+j).val();
        let university=$('#university'+j).val();
        let start=$('#start'+j).val();
        let end=$('#end'+j).val();

        if(degree=='' && university=='' && start=='' && end=='')
        {
            $(".error").html('Enter name');
        }
        else
        {
            $(".error").remove();
            let row="<div class='row'>";
            row +="<div class='col-md-2'>";
            row +="<label class='form-label'>Degree Name</label>";
            row +="<input type='text' name='degree[]"+i+"' id='degree"+i+"' class='form-control'>\<span class='error text-danger'></span>";
            row +="</div>";
            row +="<div class='col-md-2'>";
            row +="<label class='form-label'>University Name</label>";
            row +="<input type='text' name='university[]"+i+"' id='university"+i+"' class='form-control'>\<span class='error text-danger'></span>";
            row +="</div>";
            row +="<div class='col-md-2'>";
            row +="<label class='form-label'>Start Date</label>";
            row +="<input type='date' name='start[]"+i+"' id='start"+i+"' class='form-control'>\<span class='error text-danger'></span>";
            row +="</div>";
            row +="<div class='col-md-2'>";
            row +="<label class='form-label'>End Date</label>";
            row +="<input type='date' name='end[]"+i+"' id='end"+i+"' class='form-control'>\<span class='error text-danger'></span>";
            row +="</div>";
            row +="<div class='col-md-2'>";
            row +="<button class='btn btn-danger removebtn'>Remove Btn</button>";
            row +="</div>";
            row +="</div>";

            $('#education').append(row);
            i++;
            j++;

        }
    }

    $(document).on('click','.removebtn',function(event)
    {
        event.preventDefault();
        console.log($(this).parent())
        $(this).parent().parent().remove();
        
    })   

    // $("#submit").click(function(event)
    // {
    //     event.preventDefault();
    //     console.log('#submit');
    //     let name=$("#name").val();
    //     let email=$("#email").val();
    //     let phno=$("#phno").val();
    //     let nrc=$("#nrc").val();
    //     let dob=$("#dob").val();
    //     if(name=='' && email=='' && phno=='' && nrc=='' && dob=='')
    //     {
    //         $('.nameerror').html("Please enter your name");
    //         $('.emailerror').html("Please enter your email");
    //         $('.phnoerror').html("Please enter your Phone Number");
    //         $('.nrcerror').html("Please enter your NRC");
    //         $('.doberror').html("Please enter your Birthday");
    //     }
    //     else
    //     {
    //         '<script>location.href="assign8_success.php"</script>';
    //     }
    // })
    
    
    })