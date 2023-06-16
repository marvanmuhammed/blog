<head>
<script src="https://code.jquery.com/jquery-3.7.0.min.js"></script>
</head>
<body>
    

<form id="frm">
    @csrf
    <table>
        <tr>
            <td>Name</td>
            <td><input type="text" name="name" id="" required></td>
        </tr>
        <tr>
            <td>Email</td>
            <td><input type="email" name="email" id="" required></td>
        </tr>
        <tr>
            <td></td>
            <td><input type="submit" name="submit" id="frmSubmit" ></td>
        </tr>
    </table>
</form>
<div id="message"></div>
<script>
    jQuery('#frm').submit(function(e){
        
        e.preventDefault();
        
        jQuery.ajax({
            url:"{{url('form_submit')}}",
            data:jQuery('#frm').serialize(),
            type:'post',
            success:function(result){
            jQuery("#message").html(result.msg);
            jQuery('#frm')['0'].reset();
            }
           
        })
      
    }); 
</script>
</body>
