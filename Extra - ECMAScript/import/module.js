console.log('Módulo importado')

export function fetchDados(){
    console.log('Ínicio do Processamento')

    return new Promise(resolve => {
        setTimeout(() => {
            resolve('Executou')
        }, 3000)
    })
}

const dados = await fetchDados()
console.log(dados)

console.log('Fim do Processamento')
/*
export async function aguardarPromessa(){
    console.log('Ínicio do Processamento')

    function fetchDados(){
        return new Promise(resolve => {
            setTimeout(() => {
                resolve('Executou')
            }, 3000)
        })
    }

    const dados = await fetchDados()
    console.log(dados)
    console.log('Fim do Processamento')
}

aguardarPromessa();
*/