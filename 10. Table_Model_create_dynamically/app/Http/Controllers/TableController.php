<?php

namespace App\Http\Controllers;

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Artisan;
use Illuminate\Support\Facades\Schema;

class TableController extends Controller
{
    public function createTable($email)
    {
        $tableName = substr($email, 0, strpos($email, '@'));
        if (!Schema::hasTable($tableName)) {
            Schema::create($tableName, function (Blueprint $table) {
                $table->id();
                $table->string('name');
                $table->string('address');
            });
            Artisan::call('migrate');
        }
        return $tableName;
    }

    public function saveData(Request $req)
    {
        $tableName = $this->createTable($req->useremail);
        $modelName = ucfirst($tableName);

        $file = app_path() . '/Models/' . $modelName . '.php';
        if (!file_exists($file)) {
            // Define the model class contents
            $modelClassContents = <<<EOD
        <?php

        namespace App\Models;

        use Illuminate\Database\Eloquent\Model;

        class {$modelName} extends Model
        {
            protected \$table = '{$tableName}';
            protected \$fillable = ['name', 'address'];
            public \$timestamps=false;
        }
        EOD;

            // Write the model class to a file
            $file = app_path() . '/Models/' . $modelName . '.php';
            file_put_contents($file, $modelClassContents);
        }

        // Dynamically create an instance of the model
        $model = app()->make("App\\Models\\{$modelName}");
        // $model->setTable($tableName);
        $data = [
            'name' => $req->useremail,
            'address' => $req->address,
        ];
        $model->fill($data);
        $model->save();
        return "Succesfully Done";
    }
}
