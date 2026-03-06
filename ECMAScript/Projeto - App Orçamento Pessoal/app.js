class Despesa {
    constructor(ano, mes, dia, tipo, descricao, valor){
        this.ano = ano,
        this.mes = mes,
        this.dia = dia,
        this.tipo = tipo,
        this.descricao = descricao,
        this.valor = valor
    }

    validaDados(){
        for (let val in this){
            if(this[val] == "" || this[val] == undefined || this[val] == null) return false;
        }
        return true;
    }
}

class BD{

    constructor(){
        let id = localStorage.getItem("id")

        if (id == null) localStorage.setItem('id', 0)
    }

    getProximoId(){
        let proximoId = parseInt(localStorage.getItem("id")) + 1
        return proximoId
    }

    gravar(d){
        let id = this.getProximoId()
        localStorage.setItem(id, JSON.stringify(d))
        localStorage.setItem('id', id)
    }

    recuperarRegistos(){
        let id = localStorage.getItem('id')
        let despesas = Array()

        for(let i = 1; i <= id; i++){
            let despesa = JSON.parse(localStorage.getItem(i))
            if (despesa != null){
                despesa.id = i
                despesas.push(despesa)
            } 
        }
        return despesas;
    }

    pesquisar(despesa){
        let despesasFiltradas = Array()
        despesasFiltradas = this.recuperarRegistos()

        despesasFiltradas = despesasFiltradas.filter(d => despesa.ano == d.ano || despesa.ano == "")
        despesasFiltradas = despesasFiltradas.filter(d => despesa.mes == d.mes || despesa.mes == "")
        despesasFiltradas = despesasFiltradas.filter(d => despesa.dia == d.dia || despesa.dia == "")
        despesasFiltradas = despesasFiltradas.filter(d => despesa.tipo == d.tipo || despesa.tipo == "")
        despesasFiltradas = despesasFiltradas.filter(d => despesa.descricao == d.descricao || despesa.descricao == "")
        despesasFiltradas = despesasFiltradas.filter(d => despesa.valor == d.valor || despesa.valor == "")

        return despesasFiltradas
    }

    remover(id){
        localStorage.removeItem(id)
    }
}

let bd = new BD()

function cadastrarDespesa(){
    let ano = document.getElementById("ano")
    let mes = document.getElementById("mes")
    let dia = document.getElementById("dia")
    let tipo = document.getElementById("tipo")
    let descricao = document.getElementById("descricao")
    let valor = document.getElementById("valor")

    let despesa = new Despesa(ano.value, mes.value, dia.value, tipo.value, descricao.value, valor.value)

    if(despesa.validaDados()){
        bd.gravar(despesa)

        document.getElementById("modal_titulo").innerHTML = "Registo inserido com sucesso!"
        document.getElementById("modal_titulo_div").className = "modal-header text-success"
        document.getElementById("modal_body").innerHTML = "Despesa foi cadastrada com sucesso!"
        document.getElementById("modal-btn").className = "btn btn-success"
        document.getElementById("modal-btn").innerHTML = "Voltar"

        $("#modalRegistaDespesa").modal("show")

        ano.value = ""
        mes.value = ""
        dia.value = ""
        tipo.value = ""
        descricao.value = ""
        valor.value = ""

    } else {
        document.getElementById("modal_titulo").innerHTML = "Erro na gravação!"
        document.getElementById("modal_titulo_div").className = "modal-header text-danger"
        document.getElementById("modal_body").innerHTML = "Existem campos obrigatórios que não foram preenchidos!"
        document.getElementById("modal-btn").className = "btn btn-danger"
        document.getElementById("modal-btn").innerHTML = "Voltar e Corrigir"

        $("#modalRegistaDespesa").modal("show")
    }
}

function carregaListaDespesas(despesas = Array(), filtro = false){
    let listaDespesas = document.getElementById("tbody")
    listaDespesas.innerHTML = ''

    if(despesas.length == 0 && filtro == false){
        despesas = bd.recuperarRegistos()
    }

    despesas.forEach(function(d){
        let linha = listaDespesas.insertRow()

        linha.insertCell(0).innerHTML = `${d.dia}/${d.mes}/${d.ano}`
        switch (d.tipo){
            case '1': 
                d.tipo = 'Alimentação'
                break;
            case '2':
                d.tipo = 'Educação'
                break;
            case '3':
                d.tipo = 'Lazer'
                break;
            case '4':
                d.tipo = 'Saúde'
                break;
            case '5':
                d.tipo = 'Transporte'
                break;
        }
        linha.insertCell(1).innerHTML = d.tipo
        linha.insertCell(2).innerHTML = d.descricao
        linha.insertCell(3).innerHTML = d.valor
        
        let btn = document.createElement("button")
        btn.className = 'btn btn-danger'
        btn.innerHTML = '<i class="fas fa-times"> </i>'
        btn.id = 'id_despesa_' + d.id
        btn.onclick = function(){
            let id = this.id.replace("id_despesa_", '')
            bd.remover(id)

            window.location.reload()
        }
        linha.insertCell(4).append(btn)
    })

}

function pesquisarDespesa(){
    let ano = document.getElementById('ano').value
    let mes = document.getElementById('mes').value
    let dia = document.getElementById('dia').value
    let tipo = document.getElementById('tipo').value
    let descricao = document.getElementById('descricao').value
    let valor = document.getElementById('valor').value

    let despesa = new Despesa(ano, mes, dia, tipo, descricao, valor)

    let despesas = bd.pesquisar(despesa)

    this.carregaListaDespesas(despesas, true)
}