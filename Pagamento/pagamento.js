const itens = [
    {
        id: 0, 
        nome: `frango`,
        img: `planos/frango.png`,
        quantidade: 0
    },
    {
        id: 1, 
        nome: `big`,
        img: `planos/big (1).png`,
        quantidade: 0
    },
    {
        id: 2, 
        nome: `mostro`,
        img: `planos/mostro.png`,
        quantidade: 0
    }
]

inicializarCarrinho = () => {
    var containerProdutos = document.getElementById('produtos')
    itens.map((val)=>{
        containerProdutos.innerHTML += ` 

        <div class="produto-single">
            <img src="`+val.img+`" />
            <p>`+val.nome+`</p>
            <a key="`+val.id+`" href="#">Matricula-se<a/>
        </div> 
    
        `;
    })
}

inicializarCarrinho();

atualizarCarrinho = () =>{
    var containerCarrinho = document.getElementById('carrinho')
    itens.map((val)=>{
        if(val.quantidade > 0){
        
        containerCarrinho.innerHTML += ` 

        <p>`+val.nome+` | quantidade: `+val.quantidade+` </p>
         <hr>   
        `;
    }
    })
            
}

var links = document.getElementsByTagName('a');

for(var i =0; i < links.length; i++){
    links[i].addEventListener("click",function(){
        let key = this.getAttribute('key');
        itens[key].quantidade++;
        atualizarCarrinho();
        return false;
    })
}