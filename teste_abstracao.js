class VamosCasar{
   constructor(noiva,noivo,cuidadosNoiva,cuidadosNoivo){
        this.noiva = noiva;
        this.noivo = noivo;
        this.cuidadosNoiva = cuidadosNoiva;
        this.cuidadosNoivo = cuidadosNoivo;
    }

    cuidar(){
        console.log(this.noiva, this.noivo);
    }
    Noivar(){
        console.log(this.cuidadosNoiva,this.cuidadosNoivo);
    }
}

let x = new VamosCasar("o cabelo da noiva esta lindo"," e o do noivo sensacional");
let y = new VamosCasar("Eu a declaro, mulher e","Maridos");
x.cuidar();
y.Noivar();