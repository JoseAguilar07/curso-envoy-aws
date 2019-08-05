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
use Illuminate\Support\Facades\Route;

Route::get(uri:'/', function () {
    return view:('welcome');
});

Route::get(uri:'/test', function () {
    return 'Hola Test';
});

Route::get(uri:'/hola/{name}', function ($name) {
    return 'Hola '. $name;
});
