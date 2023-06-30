    <?php

    use App\Http\Controllers\BackendController;
    use App\Http\Controllers\ContentController;
    use Illuminate\Support\Facades\Route;
    use App\Http\Controllers\CourseController;
    use App\Http\Controllers\SubjectController;
    use App\Http\Controllers\FeedbackController;
    /*
    |--------------------------------------------------------------------------
    | Web Routes
    |--------------------------------------------------------------------------
    |
    | Here is where you can register web routes for your application. These
    | routes are loaded by the RouteServiceProvider and all of them will
    | be assigned to the "web" middleware group. Make something great!
    |
    */

    Route::get('/',[BackendController::class,'home']);
    Route::post('/register',[BackendController::class,'registernow'])->name('register');
    Route::post('/contact',[BackendController::class,'senquery'])->name('enquery');
    Route::prefix('/admin')->middleware('auth')->group(function () {
        Route::get('/', function () {
            return view('admin.dashboard');
        })->name("admindashboard");
        Route::resource('/course', CourseController::class)->name("course", "*");
        Route::resource('/subject', SubjectController::class)->name("subject", "*");
        Route::resource('/content', ContentController::class)->name("content", "*");
        Route::resource('/feedback', FeedbackController::class)->name("feedback", "*");
        Route::get('/enquery',[BackendController::class,'enquery'])->name('enquery');
    });

    Route::get('/login', function () {
        if (auth()->check()) {
            return redirect()->route('admindashboard');
        } else {

            return view('admin.login');
        }
    });
    Route::post('/login', [BackendController::class, 'login'])->name('login');

    Route::get('/logout', [BackendController::class, 'logout']);
