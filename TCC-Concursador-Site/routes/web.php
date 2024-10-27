<?php

use App\Http\Controllers\MateriasController;
use App\Http\Controllers\NotaController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\EventoController;
use App\Http\Controllers\QuestaoController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SimuladoController;
use App\Http\Controllers\ProvasAntigasController; // Adicione este controlador
use Illuminate\Http\Request;

Route::get('/', function () {
    return view('index');
});

Route::get('/calendario', [EventoController::class, 'index'])->name('calendario');

Route::get('/eventos', [EventoController::class, 'eventos']);


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

    Route::get('/downloadapp', function () {
        return view('downloadapp');
    })->name('downloadapp');
    

    Route::get('/uploads', function () {
        return view('uploads'); // Aponta para a view do formulário de upload
    })->name('uploads');
    
    Route::post('/extrair-questoes', [QuestaoController::class, 'extrairQuestoes'])->name('extrairQuestoes');
    Route::post('/uploadImagem', [QuestaoController::class, 'uploadImagem'])->name('uploadImagem');
    
    Route::prefix('simulados')->group(function () {
        Route::get('/enem', [SimuladoController::class, 'enem'])->name('simulados.enem');
        Route::get('/fatec', [SimuladoController::class, 'fatec'])->name('simulados.fatec');
        Route::get('/fuvest', [SimuladoController::class, 'fuvest'])->name('simulados.fuvest');
        Route::get('/unicamp', [SimuladoController::class, 'unicamp'])->name('simulados.unicamp');
        Route::get('/senac', [SimuladoController::class, 'senac'])->name('simulados.senac');
        Route::get('/ifsp', [SimuladoController::class, 'ifsp'])->name('simulados.ifsp');

        // Rotas para Submissão
        Route::post('/submit', [SimuladoController::class, 'submit'])->name('simulados.submit');
    });

    Route::prefix('provas-antigas')->group(function () {
        Route::get('/enem', [ProvasAntigasController::class, 'enem'])->name('provas.antigas.enem');
        Route::get('/fatec', [ProvasAntigasController::class, 'fatec'])->name('provas.antigas.fatec');
        Route::get('/fuvest', [ProvasAntigasController::class, 'fuvest'])->name('provas.antigas.fuvest');
        Route::get('/unicamp', [ProvasAntigasController::class, 'unicamp'])->name('provas.antigas.unicamp');
        Route::get('/senac', [ProvasAntigasController::class, 'senac'])->name('provas.antigas.senac');
        Route::get('/ifsp', [ProvasAntigasController::class, 'ifsp'])->name('provas.antigas.ifsp');
    });

    
    Route::get('/materias', function () {
        return view('materias');

    })->name('materias');
    Route::prefix('materias')->group(function () { 
        Route::prefix('matematica')->group(function () {// Grupo de rotas para a matéria matemática
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
            
            Route::get('/conjuntos-numericos', function () {
                return view('materias.matematica.conjuntos-numericos');
            })->name('conjuntos-numericos');

            Route::get('/porcentagem', function () {
                return view('materias.matematica.porcentagem');
            })->name('porcentagem');

            Route::get('/equacao-1', function () {
                return view('materias.matematica.equacao-1');
            })->name('equacao-1');

            Route::get('/equacao-2', function () {
                return view('materias.matematica.equacao-2');
            })->name('equacao-2');

            Route::get('/funcoes', function () {
                return view('materias.matematica.funcoes');
            })->name('funcoes');

            Route::get('/geometria-plana', function () {
                return view('materias.matematica.geometria-plana');
            })->name('geometria-plana');

            Route::get('/geometria-espacial', function () {
                return view('materias.matematica.geometria-espacial');
            })->name('geometria-espacial');

            Route::get('/teorema-pitagoras', function () {
                return view('materias.matematica.teorema-pitagoras');
            })->name('teorema-pitagoras');

            Route::get('/media-mediana-moda', function () {
                return view('materias.matematica.media-mediana-moda');
            })->name('media-mediana-moda');

            Route::get('/graficos-tabelas', function () {
                return view('materias.matematica.graficos-tabelas');
            })->name('graficos-tabelas');

            Route::get('/probabilidade', function () {
                return view('materias.matematica.probabilidade');
            })->name('probabilidade');

            Route::get('/juros-simples-compostos', function () {
                return view('materias.matematica.juros-simples-compostos');
            })->name('juros-simples-compostos');

            Route::get('/trigonometria', function () {
                return view('materias.matematica.trigonometria');
            })->name('trigonometria');

            Route::get('/unidades-medida', function () {
                return view('materias.matematica.unidades-medida');
            })->name('unidades-medida');

            Route::get('/prova_portugues', [MateriasController::class, 'prova_portugues'])->name('materias_prova_portugues');
        }); #Fim do agrupamento de português

        Route::prefix('biologia')->group(function () { // Grupo de rotas para a matéria biologia
            Route::get('/bioenergetica', function () {
                return view('materias.biologia.bioenergetica');
            })->name('biologia.bioenergetica');
            
            Route::get('/botanica', function () {
                return view('materias.biologia.botanica');
            })->name('biologia.botanica');

            Route::get('/celulas', function () {
                return view('materias.biologia.celulas');
            })->name('biologia.celulas');

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

            Route::get('/interacao-ecologica', function () {
                return view('materias.biologia.interacao-ecologica');
            })->name('biologia.interacao-ecologica');

            Route::get('/microbiologia', function () {
                return view('materias.biologia.microbiologia');
            })->name('biologia.microbiologia');

            Route::get('/zoologia', function () {
                return view('materias.biologia.zoologia');
            })->name('biologia.zoologia');

            Route::get('/prova_biologia', [MateriasController::class, 'prova_biologia'])->name('materias_prova_biologia');
        }); #Fim do agrupamento de biologia

        Route::prefix('fisica')->group(function () { // Grupo de rotas para a matéria fisica
            Route::get('/cinematica', function () {
                return view('materias.fisica.cinematica');
            })->name('fisica.cinematica');
            
            Route::get('/eletromagnetismo', function () {
                return view('materias.fisica.eletromagnetismo');
            })->name('fisica.eletromagnetismo');

            Route::get('/fluidos', function () {
                return view('materias.fisica.fluidos');
            })->name('fisica.fluidos');

            Route::get('/mecanica', function () {
                return view('materias.fisica.mecanica');
            })->name('fisica.mecanica');

            Route::get('/ondas', function () {
                return view('materias.fisica.ondas');
            })->name('fisica.ondas');

            Route::get('/optica', function () {
                return view('materias.fisica.optica');
            })->name('fisica.optica');

            Route::get('/termodinamica', function () {
                return view('materias.fisica.termodinamica');
            })->name('fisica.termodinamica');

            Route::get('/trabalho-energia', function () {
                return view('materias.fisica.trabalho-energia');
            })->name('fisica.trabalho-energia');

            Route::get('/prova_fisica', [MateriasController::class, 'prova_fisica'])->name('materias_prova_fisica');
        }); #Fim do agrupamento de fisica

        Route::prefix('filosofia')->group(function () { // Grupo de rotas para a matéria filosofia
            Route::get('/etica', function () {
                return view('materias.filosofia.etica');
            })->name('filosofia.etica');
            
            Route::get('/existencialismo', function () {
                return view('materias.filosofia.existencialismo');
            })->name('filosofia.existencialismo');

            Route::get('/filosofia-antiga', function () {
                return view('materias.filosofia.filosofia-antiga');
            })->name('filosofia.filosofia-antiga');

            Route::get('/filosofia-moderna', function () {
                return view('materias.filosofia.filosofia-moderna');
            })->name('filosofia.filosofia-moderna');

            Route::get('/periodo-pre-socratico', function () {
                return view('materias.filosofia.periodo-pre-socratico');
            })->name('filosofia.periodo-pre-socratico');

            Route::get('/periodo-socratico', function () {
                return view('materias.filosofia.periodo-socratico');
            })->name('filosofia.periodo-socratico');

            Route::get('/prova_filosofia', [MateriasController::class, 'prova_filosofia'])->name('materias_prova_filosofia');
        }); #Fim do agrupamento de filosofia

        Route::prefix('historia')->group(function () { // Grupo de rotas para a matéria historia
            Route::get('/civilizacoes-antigas', function () {
                return view('materias.historia.civilizacoes-antigas');
            })->name('historia.civilizacoes-antigas');
            
            Route::get('/ditadura-militar', function () {
                return view('materias.historia.ditadura-militar');
            })->name('historia.ditadura-militar');

            Route::get('/era-vargas', function () {
                return view('materias.historia.era-vargas');
            })->name('historia.era-vargas');

            Route::get('/guerras-mundiais', function () {
                return view('materias.historia.guerras-mundiais');
            })->name('historia.guerras-mundiais');

            Route::get('/idade-media', function () {
                return view('materias.idade-media');
            })->name('historia.idade-media');

            Route::get('/independencia-brasil', function () {
                return view('materias.historia.independencia-brasil');
            })->name('historia.independencia-brasil');

            Route::get('/periodo-colonial', function () {
                return view('materias.historia.periodo-colonial');
            })->name('historia.periodo-colonial');

            Route::get('/proclamacao-republica', function () {
                return view('materias.historia.proclamacao-republica');
            })->name('historia.proclamacao-republica');

            Route::get('/revolucao-francesa', function () {
                return view('materias.historia.revolucao-francesa');
            })->name('historia.revolucao-francesa');
            
            Route::get('/revolucao-industrial', function () {
                return view('materias.historia.revolucao-industrial');
            })->name('historia.revolucao-industrial');

            Route::get('/prova_historia', [MateriasController::class, 'prova_historia'])->name('materias_prova_historia');
        }); #Fim do agrupamento de historia

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

            Route::get('/oxirreducoes', function () {
                return view('materias.quimica.oxirreducoes');
            })->name('quimica.oxirreducoes');

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

            Route::get('/prova_quimica', [MateriasController::class, 'prova_quimica'])->name('materias_prova_quimica');
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
                return view('materias.sociologia.socidade-contemporanea');
            })->name('sociologia.sociedade-contemporanea');

            Route::get('/prova_quimica', [MateriasController::class, 'prova_quimica'])->name('materias_prova_quimica');
        }); #Fim do agrupamento de quimica
    });
   
});//fim da middleware('auth') que verifica se voce esta logado para dar acesso às rotas

require __DIR__.'/auth.php';
