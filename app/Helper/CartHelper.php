<?php
namespace App\Helper;
class CartHelper{
    public $items = [];
    public $total_price = 0;
    public $total_quantity = 0;

    public function __construct(){
        $this->items = session('cart') ? session('cart') : [];
        $this->total_price = $this->get_total_price();
        $this->total_quantity = $this->get_total_quantity();

    }
    public function add($product, $quantity=1){
        $item = [
            'id'=>$product->id,
        'name'=>$product->name,
        'price'=>$product->discount > 0 ? $product->discount: $product->price,
            'image'=>$product->image,
        'quantity'=>$quantity
        ];
        if (isset($this->items[$product->id])){
            $this->items[$product->id]['quantity'] +=$quantity;
        }
        else{
            $this->items[$product->id]=$item;

        }

        session(['cart'=>$this->items]);
    }
        public function update($id, $quantity = 1){
            if (isset($this->items[$id])){
                $this->items[$id]['quantity'] = $quantity;
                session(['cart'=>$this->items]);
            }
        }
        public function delete($id){
            if(isset($this->items[$id])){
                unset($this->items[$id]);
            }
            session(['cart'=>$this->items]);
        }
        public function clear(){

        session(['cart'=>'']);
        }
        public function get_total_price(){
        $sum = 0;
            foreach ($this->items as $value) {
                $sum += $value['quantity'] * $value['price'];
        }
            return $sum;
        }
        public function get_total_quantity(){
        $sum = 0;
        foreach ($this->items as $value){
            $sum += $value['quantity'];
        }
        return $sum;
        }
}
?>
