class VamosCasar{
    constructor(noiva,noivo,cuidadosNoiva,cuidadosNoivo){
         this.noiva = noiva;
         this.noivo = noivo;
         this.cuidadosNoiva = cuidadosNoiva;
         this.cuidadosNoivo = cuidadosNoivo;
     }
 
     cuidar(){
         console.log(this.noiva, this.noivo,this.cuidadosNoiva,this.cuidadosNoivo);
     }
 }
 
 
 let x = new VamosCasar("a noiva esta incrivel","e o noivo sensacional","Eu a declaro, mulher e","Maridos");
 x.cuidar();
