/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
use Iluminate\Support\Facades\Route;

Route::get(url'/', function () {
    return view('welcome');
});

Route::get(url'/test', function () {
    return 'Hola Test';
});
