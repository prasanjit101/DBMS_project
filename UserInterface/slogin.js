$(document).ready(function(){
    //alert("ok");

    $(document).on("click","#btnLogin",function(e){
        //alert("clicked");

        //alert($("#txtRollNo").val());
        //alert($("#txtPassword").val());
        
        //alert($("#lblRollNo").html());
        //alert($("#myInnerDiv").html())

        //$("#txtRollNo").val("HELLO WORLD");
        //$("#txtPassword").val("h3hrfrhihf4");

        //var x='<input type="text"><button >OK</button>';

        //$("#dynamicDiv").html(x);

        var un=$("#txtRollNo").val();
        var pwd=$("#txtPassword").val();

        var trimmedUn=un.trim();
        var lun=trimmedUn.length;

        var trimmedPw=pwd.trim();
        var lpw=trimmedPw.length;

        if(lun!=0 && lpw!=0)
        {
            $("#lblErrorMessage").text("");


            //make an ajax call
            $.ajax({
                url: "/Ourproject1/AjaxHandler/sloginAjax.php",
                type: "POST",
                dataType: "json",
                data: { username: trimmedUn, pwd: trimmedPw, action: "loginHandler" },
                beforeSend: function () {
                    alert("about to send an ajax call");
                },
                success: function (x) {
                    //alert(x.status+"->"+x.color+","+x.gender);
                    //alert(x.yourusername);
                    //alert("successful");

                    if (x.status=="OK")
                    {
                        $("#lblErrorMessage").text("VALID UN and PW");
                        document.location.replace("/ourproject1/userinterface/studenthome.php");
                    }
                    else{
                        $("#lblErrorMessage").text("INVALID UN and PW");
                    }
                },
                error: function () {
                    alert("error");
                },
            });



        }
        else{
            $("#lblErrorMessage").text("INVALID INPUT"); 
        }
    });

   
});