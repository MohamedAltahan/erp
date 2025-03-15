<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Modules\AccountTree\Models\AccountTree;
use Modules\Branch\Models\Branch;

class AccountTreeSeeder extends Seeder
{

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(): void
    {

        // ---------------------------------------------------------------------------Root accounts
        $assets = AccountTree::firstOrCreate([
            'account_code' => 1
        ], [
            'name' =>
            ['ar' => 'الأصول', 'en' => 'Assets'],
            'account_code' => 1,
            'account_nature' => 'debit',
            'account_type' => 1
        ]);
        $liabilities = AccountTree::firstOrCreate([
            'account_code' => 2
        ], [
            'name' => ['ar' => 'الالتزامات', 'en' =>  'Liabilities'],
            'account_code' => 2,
            'account_nature' => 'credit',
            'account_type' => 2
        ]);
        $equity = AccountTree::firstOrCreate([
            'account_code' => 3
        ], [
            'name' => ['ar' => 'حقوق الملكية', 'en' => 'Equity'],
            'account_code' => 3,
            'account_nature' => 'credit',
            'account_type' => 3
        ]);
        $income = AccountTree::firstOrCreate([
            'account_code' => 4
        ], [
            'name' => ['ar' => 'الإيرادات', 'en' => 'Income'],
            'account_code' => 4,
            'account_nature' => 'credit',
            'account_type' => 4
        ]);
        $expenses = AccountTree::firstOrCreate([
            'account_code' => 5
        ], [
            'name' => ['ar' => 'المصروفات', 'en' => 'Expenses'],
            'account_code' => 5,
            'account_nature' => 'debit',
            'account_type' => 5
        ]);

        // //======================================================================= 1.1 - Child accounts under fixed Assets
        $FixedAssets = AccountTree::firstOrCreate([
            'account_code' => 11
        ], [
            'name' => ['ar' => 'الأصول الثابتة', 'en' => 'Fixed assets'],
            'account_code' => 11,
            'account_nature' => 'debit',
            'account_type' => 1
        ]);
        if (!$FixedAssets->parent_id) $FixedAssets->appendToNode($assets)->save();

        $lands = AccountTree::firstOrCreate([
            'account_code' => 111
        ], [
            'name' =>  ['ar' => 'الاارضى', 'en' => 'Lands'],
            'account_code' => 111,
            'account_nature' => 'debit',
            'account_type' => 1
        ]);
        if (!$lands->parent_id) $lands->appendToNode($FixedAssets)->save();

        $buildings = AccountTree::firstOrCreate([
            'account_code' => 112
        ], [
            'name' =>  ['ar' => 'المبانى', 'en' => 'Buildings'],
            'account_code' => 112,
            'account_nature' => 'debit',
            'account_type' => 1
        ]);
        if (!$buildings->parent_id) $buildings->appendToNode($FixedAssets)->save();

        $furniture = AccountTree::firstOrCreate([
            'account_code' => 113
        ], [
            'name' =>  ['ar' => 'الاثاث', 'en' => 'Furniture'],
            'account_code' => 113,
            'account_nature' => 'debit',
            'account_type' => 1
        ]);
        if (!$furniture->parent_id) $furniture->appendToNode($FixedAssets)->save();

        $cars = AccountTree::firstOrCreate([
            'account_code' => 114
        ], [
            'name' =>  ['ar' => 'السيارات', 'en' => 'Cars'],
            'account_code' => 114,
            'account_nature' => 'debit',
            'account_type' => 1
        ]);
        if (!$cars->parent_id) $cars->appendToNode($FixedAssets)->save();

        $machines = AccountTree::firstOrCreate([
            'account_code' => 115
        ], [
            'name' =>  ['ar' => 'الات', 'en' => 'Machines'],
            'account_code' => 115,
            'account_nature' => 'debit',
            'account_type' => 1
        ]);
        if (!$machines->parent_id) $machines->appendToNode($FixedAssets)->save();

        $equipment = AccountTree::firstOrCreate([
            'account_code' => 116
        ], [
            'name' =>  ['ar' => 'معدات', 'en' => 'Equipment'],
            'account_code' => 116,
            'account_nature' => 'debit',
            'account_type' => 1
        ]);
        if (!$equipment->parent_id) $equipment->appendToNode($FixedAssets)->save();

        //---------------------------------------------------------------- 1.2 - Child accounts under Current Assets
        $currentAssets = AccountTree::firstOrCreate([
            'account_code' => 12
        ], [
            'name' => ['ar' => 'الاصول المتداولة', 'en' => 'Current assets'],
            'account_code' => 12,
            'account_nature' => 'debit',
            'account_type' => 1
        ]);
        if (!$currentAssets->parent_id) $currentAssets->appendToNode($assets)->save();

        $treasury = AccountTree::firstOrCreate([
            'account_code' => 121
        ], [
            'name' => ['ar' => 'الصندوق', 'en' => 'Treasury'],
            'account_code' => 121,
            'account_nature' => 'debit',
            'account_type' => 1
        ]);
        if (!$treasury->parent_id) $treasury->appendToNode($currentAssets)->save();

        $mainTreasury = AccountTree::firstOrCreate([
            'account_code' => 1211
        ], [
            'name' => ['ar' => 'الخزينة الرئيسية', 'en' => 'Main treasury'],
            'account_code' => 1211,
            'account_nature' => 'debit',
            'account_type' => 1
        ]);
        if (!$mainTreasury->parent_id) $mainTreasury->appendToNode($treasury)->save();

        $bank = AccountTree::firstOrCreate([
            'account_code' => 122
        ], [
            'name' => ['ar' => 'البنك', 'en' => 'The banks'],
            'account_code' => 122,
            'account_nature' => 'debit',
            'account_type' => 1
        ]);
        if (!$bank->parent_id) $bank->appendToNode($currentAssets)->save();

        $notesReceivable = AccountTree::firstOrCreate([
            'account_code' => 123
        ], [
            'name' => ['ar' => 'اوراق قبض', 'en' => 'Notes receivable'],
            'account_code' => 123,
            'account_nature' => 'debit',
            'account_type' => 1
        ]);
        if (!$notesReceivable->parent_id) $notesReceivable->appendToNode($currentAssets)->save();

        $warehouses = AccountTree::firstOrCreate([
            'account_code' => 124
        ], [
            'name' => ['ar' => 'المخازن', 'en' => 'Warehouses'],
            'account_code' => 124,
            'account_nature' => 'debit',
            'account_type' => 1
        ]);
        if (!$warehouses->parent_id)  $warehouses->appendToNode($currentAssets)->save();

        $customers = AccountTree::firstOrCreate([
            'account_code' => 125
        ], [
            'name' => ['ar' => 'العملاء', 'en' => 'Customers'],
            'account_code' => 125,
            'account_nature' => 'debit',
            'account_type' => 1
        ]);
        if (!$customers->parent_id) $customers->appendToNode($currentAssets)->save();

        $defaultCustomer = AccountTree::firstOrCreate([
            'account_code' => 1251
        ], [
            'name' => ['ar' => 'عميل افتراضي', 'en' => 'Default customer'],
            'account_code' => 1251,
            'account_nature' => 'debit',
            'account_type' => 1
        ]);
        if (!$defaultCustomer->parent_id) $defaultCustomer->appendToNode($customers)->save();

        $accruedRevenues = AccountTree::firstOrCreate([
            'account_code' => 126
        ], [
            'name' => ['ar' => 'ايرادات مستحقه', 'en' => 'Accrued revenues'],
            'account_code' => 126,
            'account_nature' => 'debit',
            'account_type' => 1
        ]);
        if (!$accruedRevenues->parent_id) $accruedRevenues->appendToNode($currentAssets)->save();

        // // ============================================================ 2.1 - Child accounts under Current liabilities
        $currentLiabilities = AccountTree::firstOrCreate([
            'account_code' => 21
        ], [
            'name' => ['ar' => 'الالتزامات المتداولة', 'en' => 'Current liabilities'],
            'account_code' => 21,
            'account_nature' => 'credit',
            'account_type' => 2
        ]);
        if (!$currentLiabilities->parent_id) $currentLiabilities->appendToNode($liabilities)->save();

        $accountsPayable = AccountTree::firstOrCreate([
            'account_code' => 211
        ], [
            'name' => ['ar' => 'الحسابات الدائنة', 'en' => 'Accounts payable'],
            'account_code' => 211,
            'account_nature' => 'credit',
            'account_type' => 2
        ]);
        if (!$accountsPayable->parent_id) $accountsPayable->appendToNode($currentLiabilities)->save();

        $otherCreditors = AccountTree::firstOrCreate([
            'account_code' => 2111
        ], [
            'name' => ['ar' => 'دائنون متنوعون', 'en' => 'Other creditors'],
            'account_code' => 2111,
            'account_nature' => 'credit',
            'account_type' => 2
        ]);
        if (!$otherCreditors->parent_id) $otherCreditors->appendToNode($currentLiabilities)->save();

        $suppliers = AccountTree::firstOrCreate([
            'account_code' => 2112
        ], [
            'name' => ['ar' => 'الموردون', 'en' => 'supplier'],
            'account_code' => 2112,
            'account_nature' => 'credit',
            'account_type' => 2
        ]);
        if (!$suppliers->parent_id)  $suppliers->appendToNode($accountsPayable)->save();

        $defaultSupplier = AccountTree::firstOrCreate([
            'account_code' => 21121
        ], [
            'name' => ['ar' => 'مورد افتراضي', 'en' => 'Default supplier'],
            'account_code' => 21121,
            'account_nature' => 'credit',
            'account_type' => 2
        ]);
        if (!$defaultSupplier->parent_id) $defaultSupplier->appendToNode($suppliers)->save();

        $shortTtermLoans = AccountTree::firstOrCreate([
            'account_code' => 2113
        ], [
            'name' => ['ar' => 'قروض قصيرة الاجل', 'en' => 'Short-term loans'],
            'account_code' => 2113,
            'account_nature' => 'credit',
            'account_type' => 2
        ]);
        if (!$shortTtermLoans->parent_id)  $shortTtermLoans->appendToNode($accountsPayable)->save();

        $notesPayable = AccountTree::firstOrCreate([
            'account_code' => 2114
        ], [
            'name' => ['ar' => 'أوراق الدفع', 'en' => 'Notes payable'],
            'account_code' => 2114,
            'account_nature' => 'credit',
            'account_type' => 2
        ]);
        if (!$notesPayable->parent_id)  $notesPayable->appendToNode($accountsPayable)->save();

        $revenueReceivedInAdvance = AccountTree::firstOrCreate([
            'account_code' => 2116
        ], [
            'name' => ['ar' => 'ايرادات مقبوضه مقدما', 'en' => 'Revenue received in advance'],
            'account_code' => 2116,
            'account_nature' => 'credit',
            'account_type' => 2
        ]);
        if (!$revenueReceivedInAdvance->parent_id)  $revenueReceivedInAdvance->appendToNode($accountsPayable)->save();

        //------------------------------------------------------------------- 2.2 Child accounts under Current liabilities
        $longTermLiabilities = AccountTree::firstOrCreate([
            'account_code' => 22
        ], [
            'name' => ['ar' => 'الالتزامات طويلة الاجل', 'en' => 'Long-term Liabilities'],
            'account_code' => 22,
            'account_nature' => 'credit',
            'account_type' => 2
        ]);
        if (!$longTermLiabilities->parent_id)  $longTermLiabilities->appendToNode($liabilities)->save();

        $longTermLoans = AccountTree::firstOrCreate([
            'account_code' => 221
        ], [
            'name' => ['ar' => 'قروض طويلة الاجل', 'en' => 'Long-term loans'],
            'account_code' => 221,
            'account_nature' => 'credit',
            'account_type' => 2
        ]);
        if (!$longTermLoans->parent_id)   $longTermLoans->appendToNode($longTermLiabilities)->save();

        // // ==================================================================== 3.1 - Child accounts under Income
        $capital = AccountTree::firstOrCreate([
            'account_code' => 31
        ], [
            'name' => ['ar' => 'رأس المال', 'en' => 'Capital'],
            'account_code' => 31,
            'account_nature' => 'credit',
            'account_type' => 2
        ]);
        if (!$capital->parent_id)  $capital->appendToNode($equity)->save();

        // ==================================================================== 4.1 - Child accounts under Income


        // ==================================================================== 5.1 - Child accounts under Expenses

    }
}
