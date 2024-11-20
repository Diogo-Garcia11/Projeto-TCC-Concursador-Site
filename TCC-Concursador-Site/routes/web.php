<?php

use App\Http\Controllers\MateriasController;
use App\Http\Controllers\NotaController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\EventoController;
use App\Http\Controllers\ContactController;

use App\Http\Controllers\RedacaoController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SimuladoController;

use Illuminate\Http\Request;

Route::get('/', function () {
    return view('index');
});




Route::get('/dashboard', [NotaController::class, 'index'])
    ->middleware(['auth', 'verified'])
    ->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');



    Route::get('/simulados', function () {
        return view('simulados');
    })->name('simulados');

    Route::get('/comunidade', function () {
        return view('comunidade');
    })->name('comunidade');

    Route::post('/contact-send', [ContactController::class, 'send'])->name('contact.send');



    Route::get('/downloadapp', function () {
        return view('downloadapp');
    })->name('downloadapp');


    Route::get('/uploads', function () {
        return view('uploads'); // Aponta para a view do formulário de upload
    })->name('uploads');
    Route::get('/calendario', [EventoController::class, 'index'])->name('calendario');

    Route::get('/eventos', [EventoController::class, 'eventos']);

    Route::post('/essay', [RedacaoController::class, 'submitEssay'])->name('essay.submit');

    Route::prefix('simulados')->group(function () {
        Route::get('/enem', [SimuladoController::class, 'enem'])->name('simulados.enem');

        // Rotas para Submissão
        Route::post('/submit', [SimuladoController::class, 'submit'])->name('simulados.submit');
    });

    Route::get('/materias', function () {
        return view('materias');
    })->name('materias');

    Route::prefix('materias')->group(function () {
        Route::prefix('matematica')->group(function () { // Grupo de rotas para a matéria matemática
            Route::get('/fracao', function () {
                return view('materias.matematica.fracao');
            })->name('matematica.fracao');

            Route::get('/conjuntos-numericos', function () {
                return view('materias.matematica.conjuntos-numericos');
            })->name('matematica.conjuntos-numericos');

            Route::get('/porcentagem', function () {
                return view('materias.matematica.porcentagem');
            })->name('matematica.porcentagem');

            Route::get('/equacao-1', function () {
                return view('materias.matematica.equacao-1');
            })->name('matematica.equacao-1');

            Route::get('/equacao-2', function () {
                return view('materias.matematica.equacao-2');
            })->name('matematica.equacao-2');

            Route::get('/funcoes', function () {
                return view('materias.matematica.funcoes');
            })->name('matematica.funcoes');

            Route::get('/geometria-plana', function () {
                return view('materias.matematica.geometria-plana');
            })->name('matematica.geometria-plana');

            Route::get('/geometria-espacial', function () {
                return view('materias.matematica.geometria-espacial');
            })->name('matematica.geometria-espacial');

            Route::get('/teorema-pitagoras', function () {
                return view('materias.matematica.teorema-pitagoras');
            })->name('matematica.teorema-pitagoras');

            Route::get('/media-mediana-moda', function () {
                return view('materias.matematica.media-mediana-moda');
            })->name('matematica.media-mediana-moda');

            Route::get('/graficos-tabelas', function () {
                return view('materias.matematica.graficos-tabelas');
            })->name('matematica.graficos-tabelas');

            Route::get('/probabilidade', function () {
                return view('materias.matematica.probabilidade');
            })->name('matematica.probabilidade');

            Route::get('/juros-simples-compostos', function () {
                return view('materias.matematica.juros-simples-compostos');
            })->name('matematica.juros-simples-compostos');

            Route::get('/trigonometria', function () {
                return view('materias.matematica.trigonometria');
            })->name('matematica.trigonometria');

            Route::get('/unidades-medida', function () {
                return view('materias.matematica.unidades-medida');
            })->name('matematica.unidades-medida');

            Route::get('/prova_matematica', [MateriasController::class, 'prova_matematica'])->name('matematica.materias_prova_matematica');
        }); #Fim do agrupamento de matemática

        Route::prefix('portugues')->group(function () { // Grupo de rotas para a matéria portugues
            Route::get('/', function () {
                return view('materias.portugues');
            })->name('portugues.');


            Route::get('/coesao-e-coerencia', function () {
                return view('materias.portugues.coesao-e-coerencia');
            })->name('portugues.coesao-e-coerencia');

            Route::get('/figuras-de-linguagem', function () {
                return view('materias.portugues.figuras-de-linguagem');
            })->name('portugues.figuras-de-linguagem');

            Route::get('/funcoes-da-linguagem', function () {
                return view('materias.portugues.funcoes-da-linguagem');
            })->name('portugues.funcoes-da-linguagem');

            Route::get('/generos-textuais', function () {
                return view('materias.portugues.generos-textuais');
            })->name('portugues.generos-textuais');

            Route::get('/interpretacao-de-texto', function () {
                return view('materias.portugues.interpretacao-de-texto');
            })->name('portugues.interpretacao-de-texto');

            Route::get('/redacao', function () {
                return view('materias.portugues.redacao');
            })->name('portugues.redacao');

            Route::get('/prova_portugues', [MateriasController::class, 'prova_portugues'])->name('portugues.materias_prova_portugues');
        }); #Fim do agrupamento de português

        Route::prefix('biologia')->group(function () { // Grupo de rotas para a matéria biologia            

            Route::get('/ecologia', function () {
                return view('materias.biologia.ecologia');
            })->name('biologia.ecologia');

            Route::get('/evolucao', function () {
                return view('materias.biologia.evolucao');
            })->name('biologia.evolucao');

            Route::get('/fisiologia', function () {
                return view('materias.biologia.fisiologia');
            })->name('biologia.fisiologia');

            Route::get('/genetica', function () {
                return view('materias.biologia.genetica');
            })->name('biologia.genetica');

            Route::get('/citologia', function () {
                return view('materias.biologia.citologia');
            })->name('biologia.citologia');

            Route::get('/prova_biologia', [MateriasController::class, 'prova_biologia'])->name('biologia.materias_prova_biologia');
        }); #Fim do agrupamento de biologia

        Route::prefix('fisica')->group(function () { // Grupo de rotas para a matéria fisica
            Route::get('/cinematica', function () {
                return view('materias.fisica.cinematica');
            })->name('fisica.cinematica');

            Route::get('/eletricidade', function () {
                return view('materias.fisica.eletricidade');
            })->name('fisica.eletricidade');

            Route::get('/energia', function () {
                return view('materias.fisica.energia');
            })->name('fisica.energia');

            Route::get('/newton', function () {
                return view('materias.fisica.newton');
            })->name('fisica.newton');

            Route::get('/ondulatoria', function () {
                return view('materias.fisica.ondulatoria');
            })->name('fisica.ondulatoria');

            

            Route::get('/prova_fisica', [MateriasController::class, 'prova_fisica'])->name('fisica.materias_prova_fisica');
        }); #Fim do agrupamento de fisica

        Route::prefix('filosofia')->group(function () { // Grupo de rotas para a matéria filosofia
            Route::get('/filosofos', function () {
                return view('materias.filosofia.filosofos');
            })->name('filosofia.filosofos');
            
            Route::get('/contratualismo', function () {
                return view('materias.filosofia.contratualismo');
            })->name('filosofia.contratualismo');

            Route::get('/kant', function () {
                return view('materias.filosofia.kant');
            })->name('filosofia.kant');

            Route::get('/marxismo', function () {
                return view('materias.filosofia.marxismo');
            })->name('filosofia.marxismo');

            Route::get('/iluminismo', function () {
                return view('materias.filosofia.iluminismo');
            })->name('filosofia.iluminismo');


            Route::get('/prova_filosofia', [MateriasController::class, 'prova_filosofia'])->name('filosofia.materias_prova_filosofia');
        }); #Fim do agrupamento de filosofia

        Route::prefix('historia')->group(function () { // Grupo de rotas para a matéria historia
            Route::get('/brasil', function () {
                return view('materias.historia.brasil');
            })->name('historia.brasil');

            Route::get('/revolucoes', function () {
                return view('materias.historia.revolucoes');
            })->name('historia.revolucoes');

            Route::get('/guerramundial', function () {
                return view('materias.historia.guerramundial');
            })->name('historia.guerramundial');

            Route::get('/guerrafria', function () {
                return view('materias.historia.guerrafria');
            })->name('historia.guerrafria');

            Route::get('/idademedia', function () {
                return view('materias.historia.idademedia');
            })->name('historia.idademedia'); 

            Route::get('/prova_historia', [MateriasController::class, 'prova_historia'])->name('historia.materias_prova_historia');
        }); #Fim do agrupamento de historia

        Route::prefix('geografia')->group(function () { // Grupo de rotas para a matéria Geografia
            Route::get('/cartografia', function () {
                return view('materias.geografia.cartografia');
            })->name('geografia.cartografia');

            Route::get('/geografia-fisica', function () {
                return view('materias.geografia.geografia-fisica');
            })->name('geografia.geografia-fisica');

            Route::get('/geopolitica', function () {
                return view('materias.geografia.geopolitica');
            })->name('geografia.geopolitica');

            Route::get('/populacao', function () {
                return view('materias.geografia.populacao');
            })->name('geografia.populacao');

            Route::get('/geografia-economica', function () {
                return view('materias.geografia.geografia-economica');
            })->name('geografia.geografia-economica');



            Route::get('/prova_geografia', [MateriasController::class, 'prova_geografia'])->name('geografia.materias_prova_geografia');
        }); #Fim do agrupamento de geografia

        Route::prefix('quimica')->group(function () { // Grupo de rotas para a matéria quimica
            Route::get('/acidos-bases', function () {
                return view('materias.quimica.acidos-bases');
            })->name('quimica.acidos-bases');

            Route::get('/eletroquimica', function () {
                return view('materias.quimica.eletroquimica');
            })->name('quimica.eletroquimica');

            Route::get('/estequiometria', function () {
                return view('materias.quimica.estequiometria');
            })->name('quimica.estequiometria');

            Route::get('/estrutura-atomica', function () {
                return view('materias.quimica.estrutura-atomica');
            })->name('quimica.estrutura-atomica');

            Route::get('/ligacoes-quimicas', function () {
                return view('materias.quimica.ligacoes-quimicas');
            })->name('quimica.ligacoes-quimicas');

            Route::get('/quimica-organica', function () {
                return view('materias.quimica.quimica-organica');
            })->name('quimica.quimica-organica');

            Route::get('/radiotividade', function () {
                return view('materias.quimica.radiotividade');
            })->name('quimica.radioatividade');

            Route::get('/reacoes-quimicas', function () {
                return view('materias.quimica.reacoes-quimicas');
            })->name('quimica.reacoes-quimicas');

            Route::get('/tabela-periodica', function () {
                return view('materias.quimica.tabela-periodica');
            })->name('quimica.tabela-periodica');

            Route::get('/termodinamica', function () {
                return view('materias.quimica.termodinamica');
            })->name('quimica.termodinamica-quimica');

            Route::get('/prova_quimica', [MateriasController::class, 'prova_quimica'])->name('quimica.materias_prova_quimica');
        }); #Fim do agrupamento de quimica

        Route::prefix('sociologia')->group(function () { // Grupo de rotas para a matéria sociologia
            Route::get('/movimentos-sociais', function () {
                return view('materias.sociologia.movimentos-sociais');
            })->name('sociologia.movimentos-sociais');

            Route::get('/cidadania-direitos-humanos', function () {
                return view('materias.sociologia.cidadania-direitos-humanos');
            })->name('sociologia.cidadania-direitos-humanos');

            Route::get('/politica-estado-governo', function () {
                return view('materias.sociologia.politica-estado-governo');
            })->name('sociologia.politica-estado-governo');

            Route::get('/socidade-contemporanea', function () {
                return view('materias.sociologia.sociedade-contemporanea');
            })->name('sociologia.sociedade-contemporanea');

            Route::get('/prova_sociologia', [MateriasController::class, 'prova_sociologia'])->name('sociologia.materias_prova_quimica');
        });

        Route::prefix('literatura')->group(function () { 
            Route::get('/escolas', function () {
                return view('materias.literatura.escolas');
            })->name('literatura.escolas');

            Route::get('/modernismo-brasileiro', function () {
                return view('materias.literatura.modernismo-brasileiro');
            })->name('literatura.modernismo-brasileiro');

            Route::get('/contexto-historico', function () {
                return view('materias.literatura.contexto-historico');
            })->name('literatura.contexto-historico');

            Route::get('/textos-literarios', function () {
                return view('materias.literatura.textos-literarios');
            })->name('literatura.textos-literarios');

            Route::get('/movimentos-literarios', function () {
                return view('materias.literatura.movimentos-literarios');
            })->name('literatura.movimentos-literarios');

            Route::get('/prova_literatura', [MateriasController::class, 'prova_literatura'])->name('literatura.materias_prova_quimica');
        });
    });
}); //fim da middleware('auth') que verifica se voce esta logado para dar acesso às rotas

require __DIR__ . '/auth.php';
