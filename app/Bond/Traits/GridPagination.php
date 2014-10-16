<?php
namespace Bond\Traits;

use Input;
use DB;

trait GridPagination {
    /**
     * @param       $tableName
     * @param array $columns
     *
     * @return array
     * @throws \Whoops\Example\Exception
     */
    public function getGridData ($tableName, array $columns)
    {
        if (!empty($tableName) || !empty($columns)) {

            $search = Input::get ('search');
            $order  = Input::get ('order');

            $orderColumn = isset($order[0]['column']) ? $columns[$order[0]['column']] : 'id';
            $orderDir    = isset($order[0]['dir']) ? $order[0]['dir'] : 'DESC';

            $search = isset($search['value']) ? $search['value'] : '';

            $qb = DB::table ($tableName)
                ->orderBy ($orderColumn, $orderDir);
            $qb->select ($columns);
            //build search conditions
            foreach ($columns as $key => $column) {
                if (!empty($search)) {
                    if ($key == 0) {
                        $qb->where ($column, 'like', "%$search%");
                    } else {
                        $qb->orWhere ($column, 'like', "%$search%");
                    }
                }
            }

            $totalItem = $qb->count ();

            $itemCollection = $qb->skip (Input::get ('start'))
                ->take (Input::get ('length'))
                ->get ();

            $data = [];

            foreach ($itemCollection as $item) {
                foreach ($columns as $column) {
                    if (property_exists ($item, $column)) {
                        $temp[] = $item->$column;
                    }
                }
                $temp[] = "<a href='{$item->id}' class=\"edit-node\">Edit</a> | <a href='{$item->id}' class=\"delete-node\">Delete</a>";
                $data[] = $temp;
                unset($temp);
            }

            return array(
                'draw'            => Input::get ('draw'),
                'recordsTotal'    => $totalItem,
                'recordsFiltered' => $totalItem,
                'data'            => $data
            );
        } else {
            throw new \Exception ("Table name or columns is not provided");
        }
    }
}