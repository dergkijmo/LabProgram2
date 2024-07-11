<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class innovation_star_registrations extends Model
{
    use HasFactory;
    protected $fillable = [
        'grade',
        'class',
        'name',
        'company_name',
        'entity_type',
        'registration_time',
        'company_scale',
    ];

    protected $table='innovation_star_registrations';
    public $timestamps=true;
    protected $primaryKey='id';

    public static function id_cha($student_id)
    {

        try {
            $xinxi = innovation_star_registrations::where('student_id', $student_id)->count(); //指where中的内容相同时的次数有多少
            return $xinxi;
        }catch (Exception $e) {
            return 'error' . $e->getMessage();
        }

    }
    public static function cha($student_id)
    {
        try {
            $xinxi = innovation_star_registrations::where('student_id', $student_id)   //表示在innovation_star_registrations这张表中
            ->select(                                                              //当括号内的两个字段相等的时候，查询select里面包含的信息
                'id',
                'grade',
                'major',
                'class',
                'name', // 确保字段名与数据库一致
                'company_name',
                'entity_type',
                'registration_time',
                'company_scale',
                'status',
                'certificate',
                'rejection_reason'
            )                   //get() 和 first() 都是用于从数据库中获取数据的方法，get()返回多条时使用,而first()获取第一条符合查询条件的记录时使用。
            ->get();                //->get()意思就是将select里面的这些内容展示出来，就像apifox里面发送student_id后所展示出来的内容
            return $xinxi;
        }catch (Exception $e) {
            return 'error' . $e->getMessage();
        }
    }






    public static function id_gai($id)
    {
        try {
            $xinxi = innovation_star_registrations::where('id', $id)->count(); //指where中的内容相同时的次数有多少
            return $xinxi;
        }catch (Exception $e) {
            return 'error' . $e->getMessage();
        }
    }
    public static function gai($id,$request)
    {

        $xinxi = innovation_star_registrations::where('id',$id)->first();  //   查询一条记录

        try {
        $xinxi ->update([
            'grade'=>$request['grade'],
            'class'=>$request['class'],
            'name'=>$request['name'],
            'company_name'=>$request['company_name'],
            'entity_type'=>$request['entity_type'],
            'registration_time'=>$request['registration_time'],
            'company_scale'=>$request['company_scale']
        ]);

            $xinxi = innovation_star_registrations::where('id',$id)->first();  //显示更新的内容
            return $xinxi;
        }
        catch (Exception $e) {
            return 'error' . $e->getMessage();
        }
    }








    public static function id_shan($id)
    {
        try {
            $xinxi=innovation_star_registrations::where('id',$id)->count();
            return $xinxi;
        }
        catch (Exception $e){
            return 'error' . $e->getMessage();
        }
    }
    public static function shan($id)
    {
        try {
            $xinxi=innovation_star_registrations::where('id',$id)->delete();
            return $xinxi;
        }
        catch (Exception $e){
            return 'error' . $e->getMessage();
        }
    }
}
