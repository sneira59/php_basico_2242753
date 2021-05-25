<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MetabuscadorController extends Controller
{
    //Controlador esta compuesto de acciones
    // cada accion estara vinculada a su correspondiente ruta
    public function mostrar_formulario(){
        //mostrar la vista del metabuscador
        return view('metabuscador');

    }
    // realizar la busqueda
    public function buscar_termino(){
       $termino = $_POST["termino"];
       $motor = $_POST["motores"];

       switch($motor){
           case 1: return redirect()->to("https://www.google.com/search?q=$termino");
                break;
            case 2: return redirect()->to("https://www.bing.com/search?q=$termino");
                break;
            case 3: return redirect()->to("https://duckduckgo.com/?q=$termino");
                break;
            case 4: return redirect()->to("https://www.ask.com/web?q=$termino");
                    break;
            case 5: return redirect()->to("https://www.ecosia.org/search?q=$termino");
                    break;
            case 6: return redirect()->to("https://gigablast.com/search?c=main&qlangcountry=en-us&q=$termino");
                    break;
            case 7: return redirect()->to("https://yandex.com/search/?text=$termino&lr=21174");
                    break;
            case 8: return redirect()->to("https://search.aol.com/aol/search;_ylt=AwrE1xIkCq1gMzsAtgtoCWVH;_ylc=X1MDMTE5NzgwMzg4MARfcgMyBGZyAwRmcjIDc2ItdG9wLXNlYXJjaARncHJpZAN5NWtHSnNKbFFkV2VZRkVza2Rhek9BBG5fcnNsdAMwBG5fc3VnZwMxMARvcmlnaW4Dc2VhcmNoLmFvbC5jb20EcG9zAzAEcHFzdHIDBHBxc3RybAMwBHFzdHJsAzQEcXVlcnkDaG9sYQR0X3N0bXADMTYyMTk1MzA3Mg--?q=$termino");
                    break;
            case 9: return redirect()->to("https://www.qwant.com/?l=es&q=$termino");
                    break;
            case 10: return redirect()->to("https://www.dogpile.com/serp?q=$termino");
                    break;




       }



    }
}
