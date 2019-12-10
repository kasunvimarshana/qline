<?php

use Illuminate\Database\Seeder;

use App\MeasurePoint;

class MeasurePointSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        //ucwords ( string $str [, string $delimiters = " \t\r\n\f\v" ] ) : string
        /*
        $newMeasurePoint = MeasurePoint::firstOrCreate([
            'id' => ucwords('Default'),
            'is_visible' => true,
            'is_active' => true,
            'code' => ucwords('Default'),
            'name' => ucwords('Default'),
            'display_name' => ucwords('Default')
        ]);
        */
        $newMeasurePoint = MeasurePoint::firstOrCreate([
            'id' => ucwords('Wire Play'),
            'is_visible' => true,
            'is_active' => true,
            'code' => ucwords('Wire Play'),
            'name' => ucwords('Wire Play'),
            'display_name' => ucwords('Wire Play')
        ]);
        
        $newMeasurePoint = MeasurePoint::firstOrCreate([
            'id' => ucwords('Wire inserting'),
            'is_visible' => true,
            'is_active' => true,
            'code' => ucwords('Wire inserting'),
            'name' => ucwords('Wire inserting'),
            'display_name' => ucwords('Wire inserting')
        ]);
        
        $newMeasurePoint = MeasurePoint::firstOrCreate([
            'id' => ucwords('Wire Insert'),
            'is_visible' => true,
            'is_active' => true,
            'code' => ucwords('Wire Insert'),
            'name' => ucwords('Wire Insert'),
            'display_name' => ucwords('Wire Insert')
        ]);
        
        $newMeasurePoint = MeasurePoint::firstOrCreate([
            'id' => ucwords('Wire Casing'),
            'is_visible' => true,
            'is_active' => true,
            'code' => ucwords('Wire Casing'),
            'name' => ucwords('Wire Casing'),
            'display_name' => ucwords('Wire Casing')
        ]);
        
        $newMeasurePoint = MeasurePoint::firstOrCreate([
            'id' => ucwords('Wing tack'),
            'is_visible' => true,
            'is_active' => true,
            'code' => ucwords('Wing tack'),
            'name' => ucwords('Wing tack'),
            'display_name' => ucwords('Wing tack')
        ]);
        
        $newMeasurePoint = MeasurePoint::firstOrCreate([
            'id' => ucwords('wing panel'),
            'is_visible' => true,
            'is_active' => true,
            'code' => ucwords('wing panel'),
            'name' => ucwords('wing panel'),
            'display_name' => ucwords('wing panel')
        ]);
        
        $newMeasurePoint = MeasurePoint::firstOrCreate([
            'id' => ucwords('wing attache'),
            'is_visible' => true,
            'is_active' => true,
            'code' => ucwords('wing attache'),
            'name' => ucwords('wing attache'),
            'display_name' => ucwords('wing attache')
        ]);
        
        $newMeasurePoint = MeasurePoint::firstOrCreate([
            'id' => ucwords('Waist Relaxed'),
            'is_visible' => true,
            'is_active' => true,
            'code' => ucwords('Waist Relaxed'),
            'name' => ucwords('Waist Relaxed'),
            'display_name' => ucwords('Waist Relaxed')
        ]);
        
        $newMeasurePoint = MeasurePoint::firstOrCreate([
            'id' => ucwords('Waist Extended'),
            'is_visible' => true,
            'is_active' => true,
            'code' => ucwords('Waist Extended'),
            'name' => ucwords('Waist Extended'),
            'display_name' => ucwords('Waist Extended')
        ]);
        
        $newMeasurePoint = MeasurePoint::firstOrCreate([
            'id' => ucwords('Waist Band'),
            'is_visible' => true,
            'is_active' => true,
            'code' => ucwords('Waist Band'),
            'name' => ucwords('Waist Band'),
            'display_name' => ucwords('Waist Band')
        ]);
        
        $newMeasurePoint = MeasurePoint::firstOrCreate([
            'id' => ucwords('Vertical seam'),
            'is_visible' => true,
            'is_active' => true,
            'code' => ucwords('Vertical seam'),
            'name' => ucwords('Vertical seam'),
            'display_name' => ucwords('Vertical seam')
        ]);
        
        $newMeasurePoint = MeasurePoint::firstOrCreate([
            'id' => ucwords('Vertical Cup'),
            'is_visible' => true,
            'is_active' => true,
            'code' => ucwords('Vertical Cup'),
            'name' => ucwords('Vertical Cup'),
            'display_name' => ucwords('Vertical Cup')
        ]);
        
        $newMeasurePoint = MeasurePoint::firstOrCreate([
            'id' => ucwords('under band'),
            'is_visible' => true,
            'is_active' => true,
            'code' => ucwords('under band'),
            'name' => ucwords('under band'),
            'display_name' => ucwords('under band')
        ]);
        
        $newMeasurePoint = MeasurePoint::firstOrCreate([
            'id' => ucwords('Under Arm'),
            'is_visible' => true,
            'is_active' => true,
            'code' => ucwords('Under Arm'),
            'name' => ucwords('Under Arm'),
            'display_name' => ucwords('Under Arm')
        ]);
        
        $newMeasurePoint = MeasurePoint::firstOrCreate([
            'id' => ucwords('Total Under band Relax'),
            'is_visible' => true,
            'is_active' => true,
            'code' => ucwords('Total Under band Relax'),
            'name' => ucwords('Total Under band Relax'),
            'display_name' => ucwords('Total Under band Relax')
        ]);
        
        $newMeasurePoint = MeasurePoint::firstOrCreate([
            'id' => ucwords('Total Under band Extended'),
            'is_visible' => true,
            'is_active' => true,
            'code' => ucwords('Total Under band Extended'),
            'name' => ucwords('Total Under band Extended'),
            'display_name' => ucwords('Total Under band Extended')
        ]);
        
        $newMeasurePoint = MeasurePoint::firstOrCreate([
            'id' => ucwords('Top Wing'),
            'is_visible' => true,
            'is_active' => true,
            'code' => ucwords('Top Wing'),
            'name' => ucwords('Top Wing'),
            'display_name' => ucwords('Top Wing')
        ]);
        
        $newMeasurePoint = MeasurePoint::firstOrCreate([
            'id' => ucwords('Tack Gusset'),
            'is_visible' => true,
            'is_active' => true,
            'code' => ucwords('Tack Gusset'),
            'name' => ucwords('Tack Gusset'),
            'display_name' => ucwords('Tack Gusset')
        ]);
        
        $newMeasurePoint = MeasurePoint::firstOrCreate([
            'id' => ucwords('Tack Fr Strap'),
            'is_visible' => true,
            'is_active' => true,
            'code' => ucwords('Tack Fr Strap'),
            'name' => ucwords('Tack Fr Strap'),
            'display_name' => ucwords('Tack Fr Strap')
        ]);
        
        $newMeasurePoint = MeasurePoint::firstOrCreate([
            'id' => ucwords('Tack Cradle Outer & Liner'),
            'is_visible' => true,
            'is_active' => true,
            'code' => ucwords('Tack Cradle Outer & Liner'),
            'name' => ucwords('Tack Cradle Outer & Liner'),
            'display_name' => ucwords('Tack Cradle Outer & Liner')
        ]);
        
        $newMeasurePoint = MeasurePoint::firstOrCreate([
            'id' => ucwords('Strap Making'),
            'is_visible' => true,
            'is_active' => true,
            'code' => ucwords('Strap Making'),
            'name' => ucwords('Strap Making'),
            'display_name' => ucwords('Strap Making')
        ]);
        
        $newMeasurePoint = MeasurePoint::firstOrCreate([
            'id' => ucwords('Strap Length'),
            'is_visible' => true,
            'is_active' => true,
            'code' => ucwords('Strap Length'),
            'name' => ucwords('Strap Length'),
            'display_name' => ucwords('Strap Length')
        ]);
        
        $newMeasurePoint = MeasurePoint::firstOrCreate([
            'id' => ucwords('Strap'),
            'is_visible' => true,
            'is_active' => true,
            'code' => ucwords('Strap'),
            'name' => ucwords('Strap'),
            'display_name' => ucwords('Strap')
        ]);
        
        $newMeasurePoint = MeasurePoint::firstOrCreate([
            'id' => ucwords('Strap'),
            'is_visible' => true,
            'is_active' => true,
            'code' => ucwords('Strap'),
            'name' => ucwords('Strap'),
            'display_name' => ucwords('Strap')
        ]);
        
        $newMeasurePoint = MeasurePoint::firstOrCreate([
            'id' => ucwords('spot tag'),
            'is_visible' => true,
            'is_active' => true,
            'code' => ucwords('spot tag'),
            'name' => ucwords('spot tag'),
            'display_name' => ucwords('spot tag')
        ]);
        
        $newMeasurePoint = MeasurePoint::firstOrCreate([
            'id' => ucwords('Size tag'),
            'is_visible' => true,
            'is_active' => true,
            'code' => ucwords('Size tag'),
            'name' => ucwords('Size tag'),
            'display_name' => ucwords('Size tag')
        ]);
        
        $newMeasurePoint = MeasurePoint::firstOrCreate([
            'id' => ucwords('Side wing'),
            'is_visible' => true,
            'is_active' => true,
            'code' => ucwords('Side wing'),
            'name' => ucwords('Side wing'),
            'display_name' => ucwords('Side wing')
        ]);
        
        $newMeasurePoint = MeasurePoint::firstOrCreate([
            'id' => ucwords('Side Seam'),
            'is_visible' => true,
            'is_active' => true,
            'code' => ucwords('Side Seam'),
            'name' => ucwords('Side Seam'),
            'display_name' => ucwords('Side Seam')
        ]);
        
        $newMeasurePoint = MeasurePoint::firstOrCreate([
            'id' => ucwords('Side Lace'),
            'is_visible' => true,
            'is_active' => true,
            'code' => ucwords('Side Lace'),
            'name' => ucwords('Side Lace'),
            'display_name' => ucwords('Side Lace')
        ]);
        
        $newMeasurePoint = MeasurePoint::firstOrCreate([
            'id' => ucwords('Shoulder seam'),
            'is_visible' => true,
            'is_active' => true,
            'code' => ucwords('Shoulder seam'),
            'name' => ucwords('Shoulder seam'),
            'display_name' => ucwords('Shoulder seam')
        ]);
        
        $newMeasurePoint = MeasurePoint::firstOrCreate([
            'id' => ucwords('Sew & Cut Strap'),
            'is_visible' => true,
            'is_active' => true,
            'code' => ucwords('Sew & Cut Strap'),
            'name' => ucwords('Sew & Cut Strap'),
            'display_name' => ucwords('Sew & Cut Strap')
        ]);
        
        $newMeasurePoint = MeasurePoint::firstOrCreate([
            'id' => ucwords('Re cup'),
            'is_visible' => true,
            'is_active' => true,
            'code' => ucwords('Re cup'),
            'name' => ucwords('Re cup'),
            'display_name' => ucwords('Re cup')
        ]);
        
        $newMeasurePoint = MeasurePoint::firstOrCreate([
            'id' => ucwords('Paper top'),
            'is_visible' => true,
            'is_active' => true,
            'code' => ucwords('Paper top'),
            'name' => ucwords('Paper top'),
            'display_name' => ucwords('Paper top')
        ]);
        
        $newMeasurePoint = MeasurePoint::firstOrCreate([
            'id' => ucwords('Pad Print'),
            'is_visible' => true,
            'is_active' => true,
            'code' => ucwords('Pad Print'),
            'name' => ucwords('Pad Print'),
            'display_name' => ucwords('Pad Print')
        ]);
        
        $newMeasurePoint = MeasurePoint::firstOrCreate([
            'id' => ucwords('Over Bust Seam'),
            'is_visible' => true,
            'is_active' => true,
            'code' => ucwords('Over Bust Seam'),
            'name' => ucwords('Over Bust Seam'),
            'display_name' => ucwords('Over Bust Seam')
        ]);
        
        $newMeasurePoint = MeasurePoint::firstOrCreate([
            'id' => ucwords('Outter Cup'),
            'is_visible' => true,
            'is_active' => true,
            'code' => ucwords('Outter Cup'),
            'name' => ucwords('Outter Cup'),
            'display_name' => ucwords('Outter Cup')
        ]);
        
        $newMeasurePoint = MeasurePoint::firstOrCreate([
            'id' => ucwords('Neckline'),
            'is_visible' => true,
            'is_active' => true,
            'code' => ucwords('Neckline'),
            'name' => ucwords('Neckline'),
            'display_name' => ucwords('Neckline')
        ]);
        
        $newMeasurePoint = MeasurePoint::firstOrCreate([
            'id' => ucwords('Neck line'),
            'is_visible' => true,
            'is_active' => true,
            'code' => ucwords('Neck line'),
            'name' => ucwords('Neck line'),
            'display_name' => ucwords('Neck line')
        ]);
        
        $newMeasurePoint = MeasurePoint::firstOrCreate([
            'id' => ucwords('Neck code'),
            'is_visible' => true,
            'is_active' => true,
            'code' => ucwords('Neck code'),
            'name' => ucwords('Neck code'),
            'display_name' => ucwords('Neck code')
        ]);
        
        $newMeasurePoint = MeasurePoint::firstOrCreate([
            'id' => ucwords('Neck'),
            'is_visible' => true,
            'is_active' => true,
            'code' => ucwords('Neck'),
            'name' => ucwords('Neck'),
            'display_name' => ucwords('Neck')
        ]);
        
        $newMeasurePoint = MeasurePoint::firstOrCreate([
            'id' => ucwords('Neaten Gusset'),
            'is_visible' => true,
            'is_active' => true,
            'code' => ucwords('Neaten Gusset'),
            'name' => ucwords('Neaten Gusset'),
            'display_name' => ucwords('Neaten Gusset')
        ]);
        
        $newMeasurePoint = MeasurePoint::firstOrCreate([
            'id' => ucwords('Narrowest'),
            'is_visible' => true,
            'is_active' => true,
            'code' => ucwords('Narrowest'),
            'name' => ucwords('Narrowest'),
            'display_name' => ucwords('Narrowest')
        ]);
        
        $newMeasurePoint = MeasurePoint::firstOrCreate([
            'id' => ucwords('N/A'),
            'is_visible' => true,
            'is_active' => true,
            'code' => ucwords('N/A'),
            'name' => ucwords('N/A'),
            'display_name' => ucwords('N/A')
        ]);
        
        $newMeasurePoint = MeasurePoint::firstOrCreate([
            'id' => ucwords('Molding'),
            'is_visible' => true,
            'is_active' => true,
            'code' => ucwords('Molding'),
            'name' => ucwords('Molding'),
            'display_name' => ucwords('Molding')
        ]);
        
        $newMeasurePoint = MeasurePoint::firstOrCreate([
            'id' => ucwords('Measurment'),
            'is_visible' => true,
            'is_active' => true,
            'code' => ucwords('Measurment'),
            'name' => ucwords('Measurment'),
            'display_name' => ucwords('Measurment')
        ]);
        
        $newMeasurePoint = MeasurePoint::firstOrCreate([
            'id' => ucwords('Locking'),
            'is_visible' => true,
            'is_active' => true,
            'code' => ucwords('Locking'),
            'name' => ucwords('Locking'),
            'display_name' => ucwords('Locking')
        ]);
        
        $newMeasurePoint = MeasurePoint::firstOrCreate([
            'id' => ucwords('Leg Opening Relax'),
            'is_visible' => true,
            'is_active' => true,
            'code' => ucwords('Leg Opening Relax'),
            'name' => ucwords('Leg Opening Relax'),
            'display_name' => ucwords('Leg Opening Relax')
        ]);
        
        $newMeasurePoint = MeasurePoint::firstOrCreate([
            'id' => ucwords('Leg Opening Extended'),
            'is_visible' => true,
            'is_active' => true,
            'code' => ucwords('Leg Opening Extended'),
            'name' => ucwords('Leg Opening Extended'),
            'display_name' => ucwords('Leg Opening Extended')
        ]);
        
        $newMeasurePoint = MeasurePoint::firstOrCreate([
            'id' => ucwords('Leg Open'),
            'is_visible' => true,
            'is_active' => true,
            'code' => ucwords('Leg Open'),
            'name' => ucwords('Leg Open'),
            'display_name' => ucwords('Leg Open')
        ]);
        
        $newMeasurePoint = MeasurePoint::firstOrCreate([
            'id' => ucwords('Leg'),
            'is_visible' => true,
            'is_active' => true,
            'code' => ucwords('Leg'),
            'name' => ucwords('Leg'),
            'display_name' => ucwords('Leg')
        ]);
        
        $newMeasurePoint = MeasurePoint::firstOrCreate([
            'id' => ucwords('Lace Attach'),
            'is_visible' => true,
            'is_active' => true,
            'code' => ucwords('Lace Attach'),
            'name' => ucwords('Lace Attach'),
            'display_name' => ucwords('Lace Attach')
        ]);
        
        $newMeasurePoint = MeasurePoint::firstOrCreate([
            'id' => ucwords('Lace'),
            'is_visible' => true,
            'is_active' => true,
            'code' => ucwords('Lace'),
            'name' => ucwords('Lace'),
            'display_name' => ucwords('Lace')
        ]);
        
        $newMeasurePoint = MeasurePoint::firstOrCreate([
            'id' => ucwords('Lable attached'),
            'is_visible' => true,
            'is_active' => true,
            'code' => ucwords('Lable attached'),
            'name' => ucwords('Lable attached'),
            'display_name' => ucwords('Lable attached')
        ]);
        
        $newMeasurePoint = MeasurePoint::firstOrCreate([
            'id' => ucwords('Label Attach'),
            'is_visible' => true,
            'is_active' => true,
            'code' => ucwords('Label Attach'),
            'name' => ucwords('Label Attach'),
            'display_name' => ucwords('Label Attach')
        ]);
        
        $newMeasurePoint = MeasurePoint::firstOrCreate([
            'id' => ucwords('Key Hole'),
            'is_visible' => true,
            'is_active' => true,
            'code' => ucwords('Key Hole'),
            'name' => ucwords('Key Hole'),
            'display_name' => ucwords('Key Hole')
        ]);
        
        $newMeasurePoint = MeasurePoint::firstOrCreate([
            'id' => ucwords('Join Wing to Cradle Side Seam'),
            'is_visible' => true,
            'is_active' => true,
            'code' => ucwords('Join Wing to Cradle Side Seam'),
            'name' => ucwords('Join Wing to Cradle Side Seam'),
            'display_name' => ucwords('Join Wing to Cradle Side Seam')
        ]);
        
        $newMeasurePoint = MeasurePoint::firstOrCreate([
            'id' => ucwords('Join Top & Btm Cups together'),
            'is_visible' => true,
            'is_active' => true,
            'code' => ucwords('Join Top & Btm Cups together'),
            'name' => ucwords('Join Top & Btm Cups together'),
            'display_name' => ucwords('Join Top & Btm Cups together')
        ]);
        
        $newMeasurePoint = MeasurePoint::firstOrCreate([
            'id' => ucwords('Join Neck & Under Arm'),
            'is_visible' => true,
            'is_active' => true,
            'code' => ucwords('Join Neck & Under Arm'),
            'name' => ucwords('Join Neck & Under Arm'),
            'display_name' => ucwords('Join Neck & Under Arm')
        ]);
        
        $newMeasurePoint = MeasurePoint::firstOrCreate([
            'id' => ucwords('Join Label to Wing'),
            'is_visible' => true,
            'is_active' => true,
            'code' => ucwords('Join Label to Wing'),
            'name' => ucwords('Join Label to Wing'),
            'display_name' => ucwords('Join Label to Wing')
        ]);
        
        $newMeasurePoint = MeasurePoint::firstOrCreate([
            'id' => ucwords('Join Cradle Top & Bagout'),
            'is_visible' => true,
            'is_active' => true,
            'code' => ucwords('Join Cradle Top & Bagout'),
            'name' => ucwords('Join Cradle Top & Bagout'),
            'display_name' => ucwords('Join Cradle Top & Bagout')
        ]);
        
        $newMeasurePoint = MeasurePoint::firstOrCreate([
            'id' => ucwords('Join Cradle Liner & Outer'),
            'is_visible' => true,
            'is_active' => true,
            'code' => ucwords('Join Cradle Liner & Outer'),
            'name' => ucwords('Join Cradle Liner & Outer'),
            'display_name' => ucwords('Join Cradle Liner & Outer')
        ]);
        
        $newMeasurePoint = MeasurePoint::firstOrCreate([
            'id' => ucwords('Join Cf Liner & Outer & top Stitch On Cf Bottom'),
            'is_visible' => true,
            'is_active' => true,
            'code' => ucwords('Join Cf Liner & Outer & top Stitch On Cf Bottom'),
            'name' => ucwords('Join Cf Liner & Outer & top Stitch On Cf Bottom'),
            'display_name' => ucwords('Join Cf Liner & Outer & top Stitch On Cf Bottom')
        ]);
        
        $newMeasurePoint = MeasurePoint::firstOrCreate([
            'id' => ucwords('Join Bagout & Tack Cf'),
            'is_visible' => true,
            'is_active' => true,
            'code' => ucwords('Join Bagout & Tack Cf'),
            'name' => ucwords('Join Bagout & Tack Cf'),
            'display_name' => ucwords('Join Bagout & Tack Cf')
        ]);
        
        $newMeasurePoint = MeasurePoint::firstOrCreate([
            'id' => ucwords('Jocker Tag '),
            'is_visible' => true,
            'is_active' => true,
            'code' => ucwords('Jocker Tag'),
            'name' => ucwords('Jocker Tag'),
            'display_name' => ucwords('Jocker Tag')
        ]);
        
        $newMeasurePoint = MeasurePoint::firstOrCreate([
            'id' => ucwords('Insert Fr Strap'),
            'is_visible' => true,
            'is_active' => true,
            'code' => ucwords('Insert Fr Strap'),
            'name' => ucwords('Insert Fr Strap'),
            'display_name' => ucwords('Insert Fr Strap')
        ]);
        
        $newMeasurePoint = MeasurePoint::firstOrCreate([
            'id' => ucwords('Hook up'),
            'is_visible' => true,
            'is_active' => true,
            'code' => ucwords('Hook up'),
            'name' => ucwords('Hook up'),
            'display_name' => ucwords('Hook up')
        ]);
        
        $newMeasurePoint = MeasurePoint::firstOrCreate([
            'id' => ucwords('Hook tape'),
            'is_visible' => true,
            'is_active' => true,
            'code' => ucwords('Hook tape'),
            'name' => ucwords('Hook tape'),
            'display_name' => ucwords('Hook tape')
        ]);
        
        $newMeasurePoint = MeasurePoint::firstOrCreate([
            'id' => ucwords('Hook Attach'),
            'is_visible' => true,
            'is_active' => true,
            'code' => ucwords('Hook Attach'),
            'name' => ucwords('Hook Attach'),
            'display_name' => ucwords('Hook Attach')
        ]);
        
        $newMeasurePoint = MeasurePoint::firstOrCreate([
            'id' => ucwords('Hook & Eye'),
            'is_visible' => true,
            'is_active' => true,
            'code' => ucwords('Hook & Eye'),
            'name' => ucwords('Hook & Eye'),
            'display_name' => ucwords('Hook & Eye')
        ]);
        
        $newMeasurePoint = MeasurePoint::firstOrCreate([
            'id' => ucwords('Hook & Eye'),
            'is_visible' => true,
            'is_active' => true,
            'code' => ucwords('Hook & Eye'),
            'name' => ucwords('Hook & Eye'),
            'display_name' => ucwords('Hook & Eye')
        ]);
        
        $newMeasurePoint = MeasurePoint::firstOrCreate([
            'id' => ucwords('Hip'),
            'is_visible' => true,
            'is_active' => true,
            'code' => ucwords('Hip'),
            'name' => ucwords('Hip'),
            'display_name' => ucwords('Hip')
        ]);
        
        $newMeasurePoint = MeasurePoint::firstOrCreate([
            'id' => ucwords('Hem On Leg'),
            'is_visible' => true,
            'is_active' => true,
            'code' => ucwords('Hem On Leg'),
            'name' => ucwords('Hem On Leg'),
            'display_name' => ucwords('Hem On Leg')
        ]);
        
        $newMeasurePoint = MeasurePoint::firstOrCreate([
            'id' => ucwords('Hem'),
            'is_visible' => true,
            'is_active' => true,
            'code' => ucwords('Hem'),
            'name' => ucwords('Hem'),
            'display_name' => ucwords('Hem')
        ]);
        
        $newMeasurePoint = MeasurePoint::firstOrCreate([
            'id' => ucwords('Heat Transfer'),
            'is_visible' => true,
            'is_active' => true,
            'code' => ucwords('Heat Transfer'),
            'name' => ucwords('Heat Transfer'),
            'display_name' => ucwords('Heat Transfer')
        ]);
        
        $newMeasurePoint = MeasurePoint::firstOrCreate([
            'id' => ucwords('Heat Seal Attach'),
            'is_visible' => true,
            'is_active' => true,
            'code' => ucwords('Heat Seal Attach'),
            'name' => ucwords('Heat Seal Attach'),
            'display_name' => ucwords('Heat Seal Attach')
        ]);
        
        $newMeasurePoint = MeasurePoint::firstOrCreate([
            'id' => ucwords('Gusset Seam'),
            'is_visible' => true,
            'is_active' => true,
            'code' => ucwords('Gusset Seam'),
            'name' => ucwords('Gusset Seam'),
            'display_name' => ucwords('Gusset Seam')
        ]);
        
        $newMeasurePoint = MeasurePoint::firstOrCreate([
            'id' => ucwords('Gusset Narrowest Width'),
            'is_visible' => true,
            'is_active' => true,
            'code' => ucwords('Gusset Narrowest Width'),
            'name' => ucwords('Gusset Narrowest Width'),
            'display_name' => ucwords('Gusset Narrowest Width')
        ]);
        
        $newMeasurePoint = MeasurePoint::firstOrCreate([
            'id' => ucwords('Gusset length'),
            'is_visible' => true,
            'is_active' => true,
            'code' => ucwords('Gusset length'),
            'name' => ucwords('Gusset length'),
            'display_name' => ucwords('Gusset length')
        ]);
        
        $newMeasurePoint = MeasurePoint::firstOrCreate([
            'id' => ucwords('Gusset'),
            'is_visible' => true,
            'is_active' => true,
            'code' => ucwords('Gusset'),
            'name' => ucwords('Gusset'),
            'display_name' => ucwords('Gusset')
        ]);
        
        $newMeasurePoint = MeasurePoint::firstOrCreate([
            'id' => ucwords('Front Top'),
            'is_visible' => true,
            'is_active' => true,
            'code' => ucwords('Front Top'),
            'name' => ucwords('Front Top'),
            'display_name' => ucwords('Front Top')
        ]);
        
        $newMeasurePoint = MeasurePoint::firstOrCreate([
            'id' => ucwords('Front Strap'),
            'is_visible' => true,
            'is_active' => true,
            'code' => ucwords('Front Strap'),
            'name' => ucwords('Front Strap'),
            'display_name' => ucwords('Front Strap')
        ]);
        
        $newMeasurePoint = MeasurePoint::firstOrCreate([
            'id' => ucwords('Front Seam'),
            'is_visible' => true,
            'is_active' => true,
            'code' => ucwords('Front Seam'),
            'name' => ucwords('Front Seam'),
            'display_name' => ucwords('Front Seam')
        ]);
        
        $newMeasurePoint = MeasurePoint::firstOrCreate([
            'id' => ucwords('Front Scoop'),
            'is_visible' => true,
            'is_active' => true,
            'code' => ucwords('Front Scoop'),
            'name' => ucwords('Front Scoop'),
            'display_name' => ucwords('Front Scoop')
        ]);
        
        $newMeasurePoint = MeasurePoint::firstOrCreate([
            'id' => ucwords('Front Rise'),
            'is_visible' => true,
            'is_active' => true,
            'code' => ucwords('Front Rise'),
            'name' => ucwords('Front Rise'),
            'display_name' => ucwords('Front Rise')
        ]);
        
        $newMeasurePoint = MeasurePoint::firstOrCreate([
            'id' => ucwords('Front Pannel'),
            'is_visible' => true,
            'is_active' => true,
            'code' => ucwords('Front Pannel'),
            'name' => ucwords('Front Pannel'),
            'display_name' => ucwords('Front Pannel')
        ]);
        
        $newMeasurePoint = MeasurePoint::firstOrCreate([
            'id' => ucwords('Front Lace'),
            'is_visible' => true,
            'is_active' => true,
            'code' => ucwords('Front Lace'),
            'name' => ucwords('Front Lace'),
            'display_name' => ucwords('Front Lace')
        ]);
        
        $newMeasurePoint = MeasurePoint::firstOrCreate([
            'id' => ucwords('Front Gusset Width'),
            'is_visible' => true,
            'is_active' => true,
            'code' => ucwords('Front Gusset Width'),
            'name' => ucwords('Front Gusset Width'),
            'display_name' => ucwords('Front Gusset Width')
        ]);
        
        $newMeasurePoint = MeasurePoint::firstOrCreate([
            'id' => ucwords('Front  Panel'),
            'is_visible' => true,
            'is_active' => true,
            'code' => ucwords('Front  Panel'),
            'name' => ucwords('Front  Panel'),
            'display_name' => ucwords('Front  Panel')
        ]);
        
        $newMeasurePoint = MeasurePoint::firstOrCreate([
            'id' => ucwords('Fly Open'),
            'is_visible' => true,
            'is_active' => true,
            'code' => ucwords('Fly Open'),
            'name' => ucwords('Fly Open'),
            'display_name' => ucwords('Fly Open')
        ]);
        
        $newMeasurePoint = MeasurePoint::firstOrCreate([
            'id' => ucwords('Flat Seam'),
            'is_visible' => true,
            'is_active' => true,
            'code' => ucwords('Flat Seam'),
            'name' => ucwords('Flat Seam'),
            'display_name' => ucwords('Flat Seam')
        ]);
        
        $newMeasurePoint = MeasurePoint::firstOrCreate([
            'id' => ucwords('Eye Tape'),
            'is_visible' => true,
            'is_active' => true,
            'code' => ucwords('Eye Tape'),
            'name' => ucwords('Eye Tape'),
            'display_name' => ucwords('Eye Tape')
        ]);
        
        $newMeasurePoint = MeasurePoint::firstOrCreate([
            'id' => ucwords('Eye Attach'),
            'is_visible' => true,
            'is_active' => true,
            'code' => ucwords('Eye Attach'),
            'name' => ucwords('Eye Attach'),
            'display_name' => ucwords('Eye Attach')
        ]);
        
        $newMeasurePoint = MeasurePoint::firstOrCreate([
            'id' => ucwords('Elastic'),
            'is_visible' => true,
            'is_active' => true,
            'code' => ucwords('Elastic'),
            'name' => ucwords('Elastic'),
            'display_name' => ucwords('Elastic')
        ]);
        
        $newMeasurePoint = MeasurePoint::firstOrCreate([
            'id' => ucwords('Decoration'),
            'is_visible' => true,
            'is_active' => true,
            'code' => ucwords('Decoration'),
            'name' => ucwords('Decoration'),
            'display_name' => ucwords('Decoration')
        ]);
        
        $newMeasurePoint = MeasurePoint::firstOrCreate([
            'id' => ucwords('Dart Point'),
            'is_visible' => true,
            'is_active' => true,
            'code' => ucwords('Dart Point'),
            'name' => ucwords('Dart Point'),
            'display_name' => ucwords('Dart Point')
        ]);
        
        $newMeasurePoint = MeasurePoint::firstOrCreate([
            'id' => ucwords('Dart Out Line'),
            'is_visible' => true,
            'is_active' => true,
            'code' => ucwords('Dart Out Line'),
            'name' => ucwords('Dart Out Line'),
            'display_name' => ucwords('Dart Out Line')
        ]);
        
        $newMeasurePoint = MeasurePoint::firstOrCreate([
            'id' => ucwords('Cut Elastic'),
            'is_visible' => true,
            'is_active' => true,
            'code' => ucwords('Cut Elastic'),
            'name' => ucwords('Cut Elastic'),
            'display_name' => ucwords('Cut Elastic')
        ]);
        
        $newMeasurePoint = MeasurePoint::firstOrCreate([
            'id' => ucwords('Cup Neck Line'),
            'is_visible' => true,
            'is_active' => true,
            'code' => ucwords('Cup Neck Line'),
            'name' => ucwords('Cup Neck Line'),
            'display_name' => ucwords('Cup Neck Line')
        ]);
        
        $newMeasurePoint = MeasurePoint::firstOrCreate([
            'id' => ucwords('Cup Inserting'),
            'is_visible' => true,
            'is_active' => true,
            'code' => ucwords('Cup Inserting'),
            'name' => ucwords('Cup Inserting'),
            'display_name' => ucwords('Cup Inserting')
        ]);
        
        $newMeasurePoint = MeasurePoint::firstOrCreate([
            'id' => ucwords('Cup'),
            'is_visible' => true,
            'is_active' => true,
            'code' => ucwords('Cup'),
            'name' => ucwords('Cup'),
            'display_name' => ucwords('Cup')
        ]);
        
        $newMeasurePoint = MeasurePoint::firstOrCreate([
            'id' => ucwords('Cradle Seam'),
            'is_visible' => true,
            'is_active' => true,
            'code' => ucwords('Cradle Seam'),
            'name' => ucwords('Cradle Seam'),
            'display_name' => ucwords('Cradle Seam')
        ]);
        
        $newMeasurePoint = MeasurePoint::firstOrCreate([
            'id' => ucwords('Close Gusset Both Sides'),
            'is_visible' => true,
            'is_active' => true,
            'code' => ucwords('Close Gusset Both Sides'),
            'name' => ucwords('Close Gusset Both Sides'),
            'display_name' => ucwords('Close Gusset Both Sides')
        ]);
        
        $newMeasurePoint = MeasurePoint::firstOrCreate([
            'id' => ucwords('Close Bottom Wing'),
            'is_visible' => true,
            'is_active' => true,
            'code' => ucwords('Close Bottom Wing'),
            'name' => ucwords('Close Bottom Wing'),
            'display_name' => ucwords('Close Bottom Wing')
        ]);
        
        $newMeasurePoint = MeasurePoint::firstOrCreate([
            'id' => ucwords('Close Bottom'),
            'is_visible' => true,
            'is_active' => true,
            'code' => ucwords('Close Bottom'),
            'name' => ucwords('Close Bottom'),
            'display_name' => ucwords('Close Bottom')
        ]);
        
        $newMeasurePoint = MeasurePoint::firstOrCreate([
            'id' => ucwords('Center Front Bottom'),
            'is_visible' => true,
            'is_active' => true,
            'code' => ucwords('Center Front Bottom'),
            'name' => ucwords('Center Front Bottom'),
            'display_name' => ucwords('Center Front Bottom')
        ]);
        
        $newMeasurePoint = MeasurePoint::firstOrCreate([
            'id' => ucwords('Center Front'),
            'is_visible' => true,
            'is_active' => true,
            'code' => ucwords('Center Front'),
            'name' => ucwords('Center Front'),
            'display_name' => ucwords('Center Front')
        ]);
        
        $newMeasurePoint = MeasurePoint::firstOrCreate([
            'id' => ucwords('Butt Join'),
            'is_visible' => true,
            'is_active' => true,
            'code' => ucwords('Butt Join'),
            'name' => ucwords('Butt Join'),
            'display_name' => ucwords('Butt Join')
        ]);
        
        $newMeasurePoint = MeasurePoint::firstOrCreate([
            'id' => ucwords('Bust Seam'),
            'is_visible' => true,
            'is_active' => true,
            'code' => ucwords('Bust Seam'),
            'name' => ucwords('Bust Seam'),
            'display_name' => ucwords('Bust Seam')
        ]);
        
        $newMeasurePoint = MeasurePoint::firstOrCreate([
            'id' => ucwords('Bra Wire'),
            'is_visible' => true,
            'is_active' => true,
            'code' => ucwords('Bra Wire'),
            'name' => ucwords('Bra Wire'),
            'display_name' => ucwords('Bra Wire')
        ]);
        
        $newMeasurePoint = MeasurePoint::firstOrCreate([
            'id' => ucwords('Bow Attached'),
            'is_visible' => true,
            'is_active' => true,
            'code' => ucwords('Bow Attached'),
            'name' => ucwords('Bow Attached'),
            'display_name' => ucwords('Bow Attached')
        ]);
        
        $newMeasurePoint = MeasurePoint::firstOrCreate([
            'id' => ucwords('Bottom Wing'),
            'is_visible' => true,
            'is_active' => true,
            'code' => ucwords('Bottom Wing'),
            'name' => ucwords('Bottom Wing'),
            'display_name' => ucwords('Bottom Wing')
        ]);
        
        $newMeasurePoint = MeasurePoint::firstOrCreate([
            'id' => ucwords('Bottom Band'),
            'is_visible' => true,
            'is_active' => true,
            'code' => ucwords('Bottom Band'),
            'name' => ucwords('Bottom Band'),
            'display_name' => ucwords('Bottom Band')
        ]);
        
        $newMeasurePoint = MeasurePoint::firstOrCreate([
            'id' => ucwords('Bone Seam'),
            'is_visible' => true,
            'is_active' => true,
            'code' => ucwords('Bone Seam'),
            'name' => ucwords('Bone Seam'),
            'display_name' => ucwords('Bone Seam')
        ]);
        
        $newMeasurePoint = MeasurePoint::firstOrCreate([
            'id' => ucwords('Binding'),
            'is_visible' => true,
            'is_active' => true,
            'code' => ucwords('Binding'),
            'name' => ucwords('Binding'),
            'display_name' => ucwords('Binding')
        ]);
        
        $newMeasurePoint = MeasurePoint::firstOrCreate([
            'id' => ucwords('Baste top & Bottom Cup Outer & Liner'),
            'is_visible' => true,
            'is_active' => true,
            'code' => ucwords('Baste top & Bottom Cup Outer & Liner'),
            'name' => ucwords('Baste top & Bottom Cup Outer & Liner'),
            'display_name' => ucwords('Baste top & Bottom Cup Outer & Liner')
        ]);
        
        $newMeasurePoint = MeasurePoint::firstOrCreate([
            'id' => ucwords('Baste Cradle Around'),
            'is_visible' => true,
            'is_active' => true,
            'code' => ucwords('Baste Cradle Around'),
            'name' => ucwords('Baste Cradle Around'),
            'display_name' => ucwords('Baste Cradle Around')
        ]);
        
        $newMeasurePoint = MeasurePoint::firstOrCreate([
            'id' => ucwords('Bar Tack'),
            'is_visible' => true,
            'is_active' => true,
            'code' => ucwords('Bar Tack'),
            'name' => ucwords('Bar Tack'),
            'display_name' => ucwords('Bar Tack')
        ]);
        
        $newMeasurePoint = MeasurePoint::firstOrCreate([
            'id' => ucwords('Bagout & Baste Wing Sides'),
            'is_visible' => true,
            'is_active' => true,
            'code' => ucwords('Bagout & Baste Wing Sides'),
            'name' => ucwords('Bagout & Baste Wing Sides'),
            'display_name' => ucwords('Bagout & Baste Wing Sides')
        ]);
        
        $newMeasurePoint = MeasurePoint::firstOrCreate([
            'id' => ucwords('Back Wing'),
            'is_visible' => true,
            'is_active' => true,
            'code' => ucwords('Back Wing'),
            'name' => ucwords('Back Wing'),
            'display_name' => ucwords('Back Wing')
        ]);
        
        $newMeasurePoint = MeasurePoint::firstOrCreate([
            'id' => ucwords('Back Waist'),
            'is_visible' => true,
            'is_active' => true,
            'code' => ucwords('Back Waist'),
            'name' => ucwords('Back Waist'),
            'display_name' => ucwords('Back Waist')
        ]);
        
        $newMeasurePoint = MeasurePoint::firstOrCreate([
            'id' => ucwords('Back Top'),
            'is_visible' => true,
            'is_active' => true,
            'code' => ucwords('Back Top'),
            'name' => ucwords('Back Top'),
            'display_name' => ucwords('Back Top')
        ]);
        
        $newMeasurePoint = MeasurePoint::firstOrCreate([
            'id' => ucwords('Back Strap'),
            'is_visible' => true,
            'is_active' => true,
            'code' => ucwords('Back Strap'),
            'name' => ucwords('Back Strap'),
            'display_name' => ucwords('Back Strap')
        ]);
        
        $newMeasurePoint = MeasurePoint::firstOrCreate([
            'id' => ucwords('Back Seam'),
            'is_visible' => true,
            'is_active' => true,
            'code' => ucwords('Back Seam'),
            'name' => ucwords('Back Seam'),
            'display_name' => ucwords('Back Seam')
        ]);
        
        $newMeasurePoint = MeasurePoint::firstOrCreate([
            'id' => ucwords('Back Scoop'),
            'is_visible' => true,
            'is_active' => true,
            'code' => ucwords('Back Scoop'),
            'name' => ucwords('Back Scoop'),
            'display_name' => ucwords('Back Scoop')
        ]);
        
        $newMeasurePoint = MeasurePoint::firstOrCreate([
            'id' => ucwords('Back Rise'),
            'is_visible' => true,
            'is_active' => true,
            'code' => ucwords('Back Rise'),
            'name' => ucwords('Back Rise'),
            'display_name' => ucwords('Back Rise')
        ]);
        
        $newMeasurePoint = MeasurePoint::firstOrCreate([
            'id' => ucwords('Back Rice'),
            'is_visible' => true,
            'is_active' => true,
            'code' => ucwords('Back Rice'),
            'name' => ucwords('Back Rice'),
            'display_name' => ucwords('Back Rice')
        ]);
        
        $newMeasurePoint = MeasurePoint::firstOrCreate([
            'id' => ucwords('Back Panel'),
            'is_visible' => true,
            'is_active' => true,
            'code' => ucwords('Back Panel'),
            'name' => ucwords('Back Panel'),
            'display_name' => ucwords('Back Panel')
        ]);
        
        $newMeasurePoint = MeasurePoint::firstOrCreate([
            'id' => ucwords('Back Loop'),
            'is_visible' => true,
            'is_active' => true,
            'code' => ucwords('Back Loop'),
            'name' => ucwords('Back Loop'),
            'display_name' => ucwords('Back Loop')
        ]);
        
        $newMeasurePoint = MeasurePoint::firstOrCreate([
            'id' => ucwords('Back Lace'),
            'is_visible' => true,
            'is_active' => true,
            'code' => ucwords('Back Lace'),
            'name' => ucwords('Back Lace'),
            'display_name' => ucwords('Back Lace')
        ]);
        
        $newMeasurePoint = MeasurePoint::firstOrCreate([
            'id' => ucwords('Back Gusset Width'),
            'is_visible' => true,
            'is_active' => true,
            'code' => ucwords('Back Gusset Width'),
            'name' => ucwords('Back Gusset Width'),
            'display_name' => ucwords('Back Gusset Width')
        ]);
        
        $newMeasurePoint = MeasurePoint::firstOrCreate([
            'id' => ucwords('Attach Stabi to Pu Cup & U/A Side'),
            'is_visible' => true,
            'is_active' => true,
            'code' => ucwords('Attach Stabi to Pu Cup & U/A Side'),
            'name' => ucwords('Attach Stabi to Pu Cup & U/A Side'),
            'display_name' => ucwords('Attach Stabi to Pu Cup & U/A Side')
        ]);
        
        $newMeasurePoint = MeasurePoint::firstOrCreate([
            'id' => ucwords('Attach Neck Line, Under Arm & Strap'),
            'is_visible' => true,
            'is_active' => true,
            'code' => ucwords('Attach Neck Line, Under Arm & Strap'),
            'name' => ucwords('Attach Neck Line, Under Arm & Strap'),
            'display_name' => ucwords('Attach Neck Line, Under Arm & Strap')
        ]);
        
        $newMeasurePoint = MeasurePoint::firstOrCreate([
            'id' => ucwords('Attach Liner Cup to Pu Cup'),
            'is_visible' => true,
            'is_active' => true,
            'code' => ucwords('Attach Liner Cup to Pu Cup'),
            'name' => ucwords('Attach Liner Cup to Pu Cup'),
            'display_name' => ucwords('Attach Liner Cup to Pu Cup')
        ]);
        
        $newMeasurePoint = MeasurePoint::firstOrCreate([
            'id' => ucwords('Attach Hook & Eye'),
            'is_visible' => true,
            'is_active' => true,
            'code' => ucwords('Attach Hook & Eye'),
            'name' => ucwords('Attach Hook & Eye'),
            'display_name' => ucwords('Attach Hook & Eye')
        ]);
        
        $newMeasurePoint = MeasurePoint::firstOrCreate([
            'id' => ucwords('Attach Gusset'),
            'is_visible' => true,
            'is_active' => true,
            'code' => ucwords('Attach Gusset'),
            'name' => ucwords('Attach Gusset'),
            'display_name' => ucwords('Attach Gusset')
        ]);
        
        $newMeasurePoint = MeasurePoint::firstOrCreate([
            'id' => ucwords('Attach Fr Strap to Bk Strap'),
            'is_visible' => true,
            'is_active' => true,
            'code' => ucwords('Attach Fr Strap to Bk Strap'),
            'name' => ucwords('Attach Fr Strap to Bk Strap'),
            'display_name' => ucwords('Attach Fr Strap to Bk Strap')
        ]);
        
        $newMeasurePoint = MeasurePoint::firstOrCreate([
            'id' => ucwords('Attach Elastic to Waist'),
            'is_visible' => true,
            'is_active' => true,
            'code' => ucwords('Attach Elastic to Waist'),
            'name' => ucwords('Attach Elastic to Waist'),
            'display_name' => ucwords('Attach Elastic to Waist')
        ]);
        
        $newMeasurePoint = MeasurePoint::firstOrCreate([
            'id' => ucwords('Attach Elastic to top Wing With Loop'),
            'is_visible' => true,
            'is_active' => true,
            'code' => ucwords('Attach Elastic to top Wing With Loop'),
            'name' => ucwords('Attach Elastic to top Wing With Loop'),
            'display_name' => ucwords('Attach Elastic to top Wing With Loop')
        ]);
        
        $newMeasurePoint = MeasurePoint::firstOrCreate([
            'id' => ucwords('Attach Elastic to top Wing'),
            'is_visible' => true,
            'is_active' => true,
            'code' => ucwords('Attach Elastic to top Wing'),
            'name' => ucwords('Attach Elastic to top Wing'),
            'display_name' => ucwords('Attach Elastic to top Wing')
        ]);
        
        $newMeasurePoint = MeasurePoint::firstOrCreate([
            'id' => ucwords('Attach Elastic to Leg'),
            'is_visible' => true,
            'is_active' => true,
            'code' => ucwords('Attach Elastic to Leg'),
            'name' => ucwords('Attach Elastic to Leg'),
            'display_name' => ucwords('Attach Elastic to Leg')
        ]);
        
        $newMeasurePoint = MeasurePoint::firstOrCreate([
            'id' => ucwords('Attach Elastic to Cradle Bottom'),
            'is_visible' => true,
            'is_active' => true,
            'code' => ucwords('Attach Elastic to Cradle Bottom'),
            'name' => ucwords('Attach Elastic to Cradle Bottom'),
            'display_name' => ucwords('Attach Elastic to Cradle Bottom')
        ]);
        
        $newMeasurePoint = MeasurePoint::firstOrCreate([
            'id' => ucwords('Attach Elastic to Cf Cradle top'),
            'is_visible' => true,
            'is_active' => true,
            'code' => ucwords('Attach Elastic to Cf Cradle top'),
            'name' => ucwords('Attach Elastic to Cf Cradle top'),
            'display_name' => ucwords('Attach Elastic to Cf Cradle top')
        ]);
        
        $newMeasurePoint = MeasurePoint::firstOrCreate([
            'id' => ucwords('Attach Elastic to Bottom Wing'),
            'is_visible' => true,
            'is_active' => true,
            'code' => ucwords('Attach Elastic to Bottom Wing'),
            'name' => ucwords('Attach Elastic to Bottom Wing'),
            'display_name' => ucwords('Attach Elastic to Bottom Wing')
        ]);
        
        $newMeasurePoint = MeasurePoint::firstOrCreate([
            'id' => ucwords('Attach Elastic to Backscoop'),
            'is_visible' => true,
            'is_active' => true,
            'code' => ucwords('Attach Elastic to Backscoop'),
            'name' => ucwords('Attach Elastic to Backscoop'),
            'display_name' => ucwords('Attach Elastic to Backscoop')
        ]);
        
        $newMeasurePoint = MeasurePoint::firstOrCreate([
            'id' => ucwords('Attach Elastic to Around Cup'),
            'is_visible' => true,
            'is_active' => true,
            'code' => ucwords('Attach Elastic to Around Cup'),
            'name' => ucwords('Attach Elastic to Around Cup'),
            'display_name' => ucwords('Attach Elastic to Around Cup')
        ]);
        
        $newMeasurePoint = MeasurePoint::firstOrCreate([
            'id' => ucwords('Attach Cups to Cf & Wing'),
            'is_visible' => true,
            'is_active' => true,
            'code' => ucwords('Attach Cups to Cf & Wing'),
            'name' => ucwords('Attach Cups to Cf & Wing'),
            'display_name' => ucwords('Attach Cups to Cf & Wing')
        ]);
        
        $newMeasurePoint = MeasurePoint::firstOrCreate([
            'id' => ucwords('Attach Cups Into Cradle'),
            'is_visible' => true,
            'is_active' => true,
            'code' => ucwords('Attach Cups Into Cradle'),
            'name' => ucwords('Attach Cups Into Cradle'),
            'display_name' => ucwords('Attach Cups Into Cradle')
        ]);
        
        $newMeasurePoint = MeasurePoint::firstOrCreate([
            'id' => ucwords('Attach Cup to Pu Cup Bottom'),
            'is_visible' => true,
            'is_active' => true,
            'code' => ucwords('Attach Cup to Pu Cup Bottom'),
            'name' => ucwords('Attach Cup to Pu Cup Bottom'),
            'display_name' => ucwords('Attach Cup to Pu Cup Bottom')
        ]);
        
        $newMeasurePoint = MeasurePoint::firstOrCreate([
            'id' => ucwords('Attach Bra Wirecasing & Insert Wires'),
            'is_visible' => true,
            'is_active' => true,
            'code' => ucwords('Attach Bra Wirecasing & Insert Wires'),
            'name' => ucwords('Attach Bra Wirecasing & Insert Wires'),
            'display_name' => ucwords('Attach Bra Wirecasing & Insert Wires')
        ]);
        
        $newMeasurePoint = MeasurePoint::firstOrCreate([
            'id' => ucwords('Attach Bow / Mottif'),
            'is_visible' => true,
            'is_active' => true,
            'code' => ucwords('Attach Bow / Mottif'),
            'name' => ucwords('Attach Bow / Mottif'),
            'display_name' => ucwords('Attach Bow / Mottif')
        ]);
        
        $newMeasurePoint = MeasurePoint::firstOrCreate([
            'id' => ucwords('Attach Bone Casing & Insert Bones'),
            'is_visible' => true,
            'is_active' => true,
            'code' => ucwords('Attach Bone Casing & Insert Bones'),
            'name' => ucwords('Attach Bone Casing & Insert Bones'),
            'display_name' => ucwords('Attach Bone Casing & Insert Bones')
        ]);
        
        $newMeasurePoint = MeasurePoint::firstOrCreate([
            'id' => ucwords('Attach Back Scoop'),
            'is_visible' => true,
            'is_active' => true,
            'code' => ucwords('Attach Back Scoop'),
            'name' => ucwords('Attach Back Scoop'),
            'display_name' => ucwords('Attach Back Scoop')
        ]);
        
        $newMeasurePoint = MeasurePoint::firstOrCreate([
            'id' => ucwords('Around Tape'),
            'is_visible' => true,
            'is_active' => true,
            'code' => ucwords('Around Tape'),
            'name' => ucwords('Around Tape'),
            'display_name' => ucwords('Around Tape')
        ]);
        
        $newMeasurePoint = MeasurePoint::firstOrCreate([
            'id' => ucwords('Around Cup'),
            'is_visible' => true,
            'is_active' => true,
            'code' => ucwords('Around Cup'),
            'name' => ucwords('Around Cup'),
            'display_name' => ucwords('Around Cup')
        ]);
        
        $newMeasurePoint = MeasurePoint::firstOrCreate([
            'id' => ucwords('Armhole'),
            'is_visible' => true,
            'is_active' => true,
            'code' => ucwords('Armhole'),
            'name' => ucwords('Armhole'),
            'display_name' => ucwords('Armhole')
        ]);
        
        $newMeasurePoint = MeasurePoint::firstOrCreate([
            'id' => ucwords('Apex'),
            'is_visible' => true,
            'is_active' => true,
            'code' => ucwords('Apex'),
            'name' => ucwords('Apex'),
            'display_name' => ucwords('Apex')
        ]);
        
        $newMeasurePoint = MeasurePoint::firstOrCreate([
            'id' => ucwords('Across Cup'),
            'is_visible' => true,
            'is_active' => true,
            'code' => ucwords('Across Cup'),
            'name' => ucwords('Across Cup'),
            'display_name' => ucwords('Across Cup')
        ]);
        
    }
}
