<script language=JavaScript>

    <!-- http://www.spacegun.co.uk -->
    
    var message = "dilarang inspect";
    
    function rtclickcheck(keyp){ if (navigator.appName == "Netscape" && keyp.which == 3){ alert(message); return false; }
    
    if (navigator.appVersion.indexOf("MSIE") != -1 && event.button == 2) { alert(message); return false; } }
    
    document.onmousedown = rtclickcheck;
    
</script>