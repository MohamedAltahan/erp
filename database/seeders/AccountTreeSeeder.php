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

        // // ==================================================================== 3.1 - Child accounts under equity
        $capital = AccountTree::firstOrCreate([
            'account_code' => 31
        ], [
            'name' => ['ar' => 'رأس المال', 'en' => 'Capital'],
            'account_code' => 31,
            'account_nature' => 'credit',
            'account_type' => 3
        ]);
        if (!$capital->parent_id)  $capital->appendToNode($equity)->save();

        $ownerDrawings = AccountTree::firstOrCreate([
            'account_code' => 32
        ], [
            'name' => ['ar' => 'المسحوبات الشخصيه', 'en' => 'Owner drawings'],
            'account_code' => 32,
            'account_nature' => 'credit',
            'account_type' => 3
        ]);
        if (!$ownerDrawings->parent_id)  $ownerDrawings->appendToNode($equity)->save();

        $ownerCurrentAccount = AccountTree::firstOrCreate([
            'account_code' => 33
        ], [
            'name' => ['ar' => 'جار ي صاحب الشركة', 'en' => 'Owner current account'],
            'account_code' => 33,
            'account_nature' => 'credit',
            'account_type' => 3
        ]);
        if (!$ownerCurrentAccount->parent_id)  $ownerCurrentAccount->appendToNode($equity)->save();

        $reserves = AccountTree::firstOrCreate([
            'account_code' => 34
        ], [
            'name' => ['ar' => 'الاحتياطات', 'en' => 'Reserves'],
            'account_code' => 34,
            'account_nature' => 'credit',
            'account_type' => 3
        ]);
        if (!$reserves->parent_id)  $reserves->appendToNode($equity)->save();

        $retainedEarnings = AccountTree::firstOrCreate([
            'account_code' => 35
        ], [
            'name' => ['ar' => 'الارباح المحتجزه', 'en' => 'Retained earnings'],
            'account_code' => 35,
            'account_nature' => 'credit',
            'account_type' => 3
        ]);
        if (!$retainedEarnings->parent_id)  $retainedEarnings->appendToNode($equity)->save();

        // ==================================================================== 4.1 - Child accounts under Income
        $mainActivityRevenue = AccountTree::firstOrCreate([
            'account_code' => 41
        ], [
            'name' => ['ar' => 'ايرادات النشاط الرئيسي', 'en' => 'Main activity revenue'],
            'account_code' => 41,
            'account_nature' => 'credit',
            'account_type' => 4
        ]);
        if (!$mainActivityRevenue->parent_id)  $mainActivityRevenue->appendToNode($income)->save();

        $sales = AccountTree::firstOrCreate([
            'account_code' => 411
        ], [
            'name' => ['ar' => 'المبيعات', 'en' => 'Sales'],
            'account_code' => 411,
            'account_nature' => 'credit',
            'account_type' => 4
        ]);
        if (!$sales->parent_id)  $sales->appendToNode($mainActivityRevenue)->save();

        $salesRefund = AccountTree::firstOrCreate([
            'account_code' => 412
        ], [
            'name' => ['ar' => 'مردودات المبيعات', 'en' => 'Sales refund'],
            'account_code' => 412,
            'account_nature' => 'debit',
            'account_type' => 4
        ]);
        if (!$salesRefund->parent_id)  $salesRefund->appendToNode($mainActivityRevenue)->save();

        $discountOnSales = AccountTree::firstOrCreate([
            'account_code' => 413
        ], [
            'name' => ['ar' => 'الخصم علي المبيعات', 'en' => 'Discount on sales'],
            'account_code' => 413,
            'account_nature' => 'debit',
            'account_type' => 4
        ]);
        if (!$discountOnSales->parent_id)  $discountOnSales->appendToNode($mainActivityRevenue)->save();

        $salesTax = AccountTree::firstOrCreate([
            'account_code' => 414
        ], [
            'name' => ['ar' => 'ضريبة.ق.م مبيعات', 'en' => 'Sales tax'],
            'account_code' => 414,
            'account_nature' => 'credit',
            'account_type' => 4
        ]);
        if (!$salesTax->parent_id)  $salesTax->appendToNode($mainActivityRevenue)->save();

        //----------------------------------------------------------------------------------------------
        $otherIncome = AccountTree::firstOrCreate([
            'account_code' => 42
        ], [
            'name' => ['ar' => 'ايرادات اخرى', 'en' => 'Other income'],
            'account_code' => 42,
            'account_nature' => 'credit',
            'account_type' => 4
        ]);
        if (!$otherIncome->parent_id)  $otherIncome->appendToNode($income)->save();

        $investmentRevenue = AccountTree::firstOrCreate([
            'account_code' => 421
        ], [
            'name' => ['ar' => 'ايرادات الاستثمار', 'en' => 'Investment revenue'],
            'account_code' => 421,
            'account_nature' => 'credit',
            'account_type' => 4
        ]);
        if (!$investmentRevenue->parent_id)  $investmentRevenue->appendToNode($otherIncome)->save();

        $rentalIncome = AccountTree::firstOrCreate([
            'account_code' => 422
        ], [
            'name' => ['ar' => 'ايرادات الايجار', 'en' => 'Rental income'],
            'account_code' => 422,
            'account_nature' => 'credit',
            'account_type' => 4
        ]);
        if (!$rentalIncome->parent_id)  $rentalIncome->appendToNode($otherIncome)->save();

        // ==================================================================== 5.1 - Child accounts under Expenses

        $saleCost = AccountTree::firstOrCreate([
            'account_code' => 51
        ], [
            'name' => ['ar' => 'تكلفة المبيعات', 'en' => 'Sales cost'],
            'account_code' => 51,
            'account_nature' => 'debit',
            'account_type' => 5
        ]);
        if (!$saleCost->parent_id)  $saleCost->appendToNode($expenses)->save();

        $purchases = AccountTree::firstOrCreate([
            'account_code' => 511
        ], [
            'name' => ['ar' => 'المشتريات', 'en' => 'Purchases'],
            'account_code' => 511,
            'account_nature' => 'debit',
            'account_type' => 5
        ]);
        if (!$purchases->parent_id)  $purchases->appendToNode($saleCost)->save();

        $purchasesCost = AccountTree::firstOrCreate([
            'account_code' => 512
        ], [
            'name' => ['ar' => 'مصاريف المشتريات', 'en' => 'Purchases cost'],
            'account_code' => 512,
            'account_nature' => 'debit',
            'account_type' => 5
        ]);
        if (!$purchasesCost->parent_id)  $purchasesCost->appendToNode($saleCost)->save();

        $purchaseReturn = AccountTree::firstOrCreate([
            'account_code' => 513
        ], [
            'name' => ['ar' => 'مردودات المشتريات', 'en' => 'Purchase returns'],
            'account_code' => 513,
            'account_nature' => 'debit',
            'account_type' => 5
        ]);
        if (!$purchaseReturn->parent_id)  $purchaseReturn->appendToNode($saleCost)->save();

        $purchaseDiscount = AccountTree::firstOrCreate([
            'account_code' => 514
        ], [
            'name' => ['ar' => 'الخصم على المشتريات', 'en' => 'Purchase discount'],
            'account_code' => 514,
            'account_nature' => 'debit',
            'account_type' => 5
        ]);
        if (!$purchaseDiscount->parent_id)  $purchaseDiscount->appendToNode($saleCost)->save();

        $purchaseTax = AccountTree::firstOrCreate([
            'account_code' => 515
        ], [
            'name' => ['ar' => 'ضريبة.ق.م مشتريات', 'en' => 'Purchase tax'],
            'account_code' => 515,
            'account_nature' => 'debit',
            'account_type' => 5
        ]);
        if (!$purchaseTax->parent_id)  $purchaseTax->appendToNode($saleCost)->save();

        //-----------------------------------------------------------------------------------------------

        $sellingAndMarketingExpenses = AccountTree::firstOrCreate([
            'account_code' => 52
        ], [
            'name' => ['ar' => 'مصاريف البيع والتسويق', 'en' => 'Selling and marketing expenses'],
            'account_code' => 52,
            'account_nature' => 'debit',
            'account_type' => 5
        ]);
        if (!$sellingAndMarketingExpenses->parent_id)  $sellingAndMarketingExpenses->appendToNode($expenses)->save();

        $saleExpenses = AccountTree::firstOrCreate([
            'account_code' => 521
        ], [
            'name' => ['ar' => 'مصاريف المبيعات', 'en' => 'Sale expenses'],
            'account_code' => 521,
            'account_nature' => 'debit',
            'account_type' => 5
        ]);
        if (!$saleExpenses->parent_id)  $saleExpenses->appendToNode($sellingAndMarketingExpenses)->save();

        $saleCommissions = AccountTree::firstOrCreate([
            'account_code' => 522
        ], [
            'name' => ['ar' => 'عمولات بيع', 'en' => 'Sale commissions'],
            'account_code' => 522,
            'account_nature' => 'debit',
            'account_type' => 5
        ]);
        if (!$saleCommissions->parent_id)  $saleCommissions->appendToNode($sellingAndMarketingExpenses)->save();

        $advertising = AccountTree::firstOrCreate([
            'account_code' => 523
        ], [
            'name' => ['ar' => 'دعاية واعلان', 'en' => 'Advertising'],
            'account_code' => 523,
            'account_nature' => 'debit',
            'account_type' => 5
        ]);
        if (!$advertising->parent_id)  $advertising->appendToNode($sellingAndMarketingExpenses)->save();

        //--------------------------------------------------------------------------------------------------------
        $genralAndAdministrativeExpenses = AccountTree::firstOrCreate([
            'account_code' => 53
        ], [
            'name' => ['ar' => 'مصاريف ادارية وعمومية', 'en' => 'General and administrative expenses'],
            'account_code' => 53,
            'account_nature' => 'debit',
            'account_type' => 5
        ]);
        if (!$genralAndAdministrativeExpenses->parent_id)  $genralAndAdministrativeExpenses->appendToNode($expenses)->save();

        $salaries = AccountTree::firstOrCreate([
            'account_code' => 531
        ], [
            'name' => ['ar' => 'رواتب', 'en' => 'Salaries'],
            'account_code' => 531,
            'account_nature' => 'debit',
            'account_type' => 5
        ]);
        if (!$salaries->parent_id)  $salaries->appendToNode($genralAndAdministrativeExpenses)->save();

        $rent = AccountTree::firstOrCreate([
            'account_code' => 532
        ], [
            'name' =>  ['ar' => 'ايجار', 'en' => 'Rent'],
            'account_code' => 532,
            'account_nature' => 'debit',
            'account_type' => 5
        ]);
        if (!$rent->parent_id)  $rent->appendToNode($genralAndAdministrativeExpenses)->save();

        $maintenance = AccountTree::firstOrCreate([
            'account_code' => 533
        ], [
            'name' =>  ['ar' => 'صيانة', 'en' => 'Maintenance'],
            'account_code' => 533,
            'account_nature' => 'debit',
            'account_type' => 5
        ]);
        if (!$maintenance->parent_id)  $maintenance->appendToNode($genralAndAdministrativeExpenses)->save();

        $phoneAndInternet = AccountTree::firstOrCreate([
            'account_code' => 534
        ], [
            'name' => ['ar' => 'هاتف وانترنت', 'en' => 'Phone and internet'],
            'account_code' => 534,
            'account_nature' => 'debit',
            'account_type' => 5
        ]);
        if (!$phoneAndInternet->parent_id)  $phoneAndInternet->appendToNode($genralAndAdministrativeExpenses)->save();

        $electricity = AccountTree::firstOrCreate([
            'account_code' => 535
        ], [
            'name' => ['ar' => 'كهرباء', 'en' => 'Electricity'],
            'account_code' => 535,
            'account_nature' => 'debit',
            'account_type' => 5
        ]);
        if (!$electricity->parent_id)  $electricity->appendToNode($genralAndAdministrativeExpenses)->save();
    }
}
