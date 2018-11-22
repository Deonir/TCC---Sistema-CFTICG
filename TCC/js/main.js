// Acessibilidade Inicio Daniel
(function () {
    var globalFontSize = 1.5;
    var fontSizeMulplier = .5;

    var setFontSize = function (fontSize) {
        [ 
            // document.querySelector("main"),
            // document.querySelector("header")
            document.body

        ].forEach( el => {
            if (fontSize < 1.5 )
                fontSize = 1.5;


            if (fontSize > 2.5)
                fontSize = 2.5;

            globalFontSize = fontSize;
            el.style.fontSize = fontSize + "em";
        });
    };

    var altoContraste = function () {
        document.body.classList.toggle("alto");
    };


    [].slice.call( document.querySelectorAll(".bt-low-brightness") ).forEach(el => {
        el.addEventListener("click", evt => {
            evt.preventDefault();
            altoContraste();
        });
    });

    [].slice.call( document.querySelectorAll(".bt-increase-font-size") ).forEach(el => {
        el.addEventListener("click", evt => {
            evt.preventDefault();
            setFontSize(globalFontSize + fontSizeMulplier);
        });
    });

    [].slice.call( document.querySelectorAll(".bt-normal-font-size") ).forEach(el => {
        el.addEventListener("click", evt => {
            evt.preventDefault();
            setFontSize(1);
        });
    });

    [].slice.call( document.querySelectorAll(".bt-decrease-font-size") ).forEach(el => {
        el.addEventListener("click", evt => {
            evt.preventDefault();
            setFontSize(globalFontSize - fontSizeMulplier);
        });
    });

    document.addEventListener("keydown", evt => {
        if (!evt.shiftKey)
            return;

        switch (evt.which) {
            case 187: // + 
            case 107: // + teclado numérico
                evt.preventDefault();
                return setFontSize(globalFontSize + fontSizeMulplier);

            case 189: // - 
            case 109: // - teclado numérico
                evt.preventDefault();
                return setFontSize(globalFontSize - fontSizeMulplier);

            case 48: // 0 
            case 96: // 0 teclado numérico
                evt.preventDefault();
                return setFontSize(1);

            case 27: // esc
                evt.preventDefault();
                return altoContraste();
        }
    });
})();

// Clona os inputs limpos assim que carrega a tela
 var cloneOriginal = document.getElementById("dBasico").cloneNode(true);

// Adiciona botao de remover 
var removeButton = document.createElement('button')
removeButton.innerHTML = "remover"
cloneOriginal.appendChild(removeButton)

// Clona o clone dos inputs e replica na tela
function teste(ev) {
    var cl = cloneOriginal.cloneNode(true);

    document.getElementById("dPessoa_Ref").appendChild(cl);
}
function clone(ev) {
    var cl = cloneOriginal.cloneNode(true);
    document.getElementById("dRes_Casa").appendChild(cl);
}


// Adiciona novos campos conforme a opção selecionada
    function optionCheck1(){
        // Pega o  select que deseja
        var option = document.getElementById("trabalha").value;
        
        if(option == "sim"){
            
            // habilita o campo para edição de dados 
            // relacionado ao Trabalho
            document.querySelectorAll('.input-holder.hide-trabalha').forEach(el=> {
                el.style.display = "flex";
            });
        }
         if(option == "nao"){
            // Desabilita o campo
            // relacionados ao Trabalho
            document.querySelectorAll('.input-holder.hide-trabalha').forEach(el=> {
                el.style.display = "none";
            });
        }
    }

    function optionCheck2(){
        // Pega o  select que deseja
        
        var option = document.getElementById("fonteR").value;
        
        if(option == "sim"){
            // habilita o campo para edição de dados 
            
            // relacionado ao campo
            document.querySelectorAll('.input-holder.hide-fonteR').forEach(el=> {
                el.style.display = "flex";
            });
        }
        if(option == "nao"){
            // Desabilita o campo
            
            //relacionado ao campo
            document.querySelectorAll('.input-holder.hide-fonteR').forEach(el=> {
                el.style.display = "none";
            });            

        }
    }

        function optionCheck3(){
        // Pega o  select que deseja
        
        var option = document.getElementById("estimacao").value;
        
        if(option == "sim"){
            // habilita o campo para edição de dados 
            
            // relacionado ao campo
            document.querySelectorAll('.input-holder.hide-estimacao').forEach(el=> {
                el.style.display = "flex";
            });
        }
         if(option == "nao"){
            // Desabilita o campo
             document.querySelectorAll('.input-holder.hide-estimacao').forEach(el=> {
                el.style.display = "none";
            });

        }
    }

    function optionCheck4(){
        // Pega o  select que deseja
        
        var option = document.getElementById("usuario").value;
        
        if(option == "sim"){
            // habilita o campo para edição de dados 
            
            // relacionado ao campo
            document.querySelectorAll('.input-holder.hide-usuario').forEach(el=> {
                el.style.display = "flex";
            });
            

        }
         if(option == "nao"){
            // Desabilita o campo
            
            //relacionado ao campo
            document.querySelectorAll('.input-holder.hide-usuario').forEach(el=> {
                el.style.display = "none";
            });
       
        }
    }
    
     
    

