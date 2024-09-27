<?php

use App\Http\Controllers\MateriasController;
use App\Http\Controllers\NotaController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\QuestaoController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SimuladoController;
use App\Http\Controllers\ProvasAntigasController; // Adicione este controlador
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

    Route::get('/materias', function () {
        return view('materias');
    })->name('materias');

    Route::get('/simulados', function () {
<<<<<<< HEAD
       return view('simulados');
     })->name('simulados');
=======
        return view('simulados');
    })->name('simulados');
>>>>>>> parent of de2c47c3 (tentando incrementar a API)
    
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

    

    Route::prefix('matematica')->group(function () {// Grupo de rotas para a matéria matemática
        Route::get('/fracao', function () {
            return view('materias.matematica.fracao');
        })->name('fracao');
        
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

        Route::get('/enem', [MateriasController::class, 'prova_matematica'])->name('materias.prova_matematica');
    }); #Fim do agrupamento de matemática
    
    Route::prefix('portugues')->group(function () { // Grupo de rotas para a matéria portugues
        Route::get('/fracao', function () {
            return view('materias.matematica.fracao');
        })->name('fracao');
        
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

        Route::get('/enem', [MateriasController::class, 'prova_portugues'])->name('materias.prova_portugues');
    }); #Fim do agrupamento de matemática

    Route::get('/comunidade', function () {
        return view('comunidade');
    })->name('comunidade');

    Route::get('/downloadapp', function () {
        return view('downloadapp');
    })->name('downloadapp');
    
    Route::get('/calendario', function () {
        return view('calendario');
    })->name('calendario');

    Route::get('/uploads', function () {
        return view('uploads'); // Aponta para a view do formulário de upload
    })->name('uploads');
    
    Route::post('/extrair-questoes', [QuestaoController::class, 'extrairQuestoes'])->name('extrairQuestoes');
    Route::post('/uploadImagem', [QuestaoController::class, 'uploadImagem'])->name('uploadImagem');
});

require __DIR__.'/auth.php';
