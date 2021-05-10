        var x = null;
        var y = null;
        var selected = 0;
        var t = null;
        var z = null;
      function pushButton(bttn){
         
          if (bttn.classList.contains("btn-primary") & (selected == 1)){
            y = bttn.id;
            console.log(y); 
            t = bttn;
            selected = 0;
            if (x === y){
                bttn.classList.replace("btn-primary","btn-secondary");
                t.remove();
                z.remove();
                  }
            else {
                console.log("in else");
                select = 0;
                t.classList.replace("btn-primary","btn-secondary");
                setTimeout(function(){ 
                    z.classList.replace("btn-secondary","btn-primary");
                t.classList.replace("btn-secondary","btn-primary");
                }, 300);
            }
          }
        else {
            
            if (bttn.classList.contains("btn-primary") & selected == 0){
                bttn.classList.replace("btn-primary","btn-secondary");
                selected = 1;
                x = bttn.id;
                z = bttn;
                console.log(x);
             } 
            else {
                selected = 0;
                bttn.classList.replace("btn-secondary","btn-primary");
            }
        }
    }
