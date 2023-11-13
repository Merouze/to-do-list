<?php

// function generateToken() {
//     if (!isset($_SESSION['token']) || time() > $_SESSION['tokenExpire']) {
//         $_SESSION['myToken'] = md5(uniqid(mt_rand(), true));
//         $_SESSION

//     }
// }


// *******************************************************

// function checkCSRF(string $url): void
// {
//     if (!isset($_SERVER['HTTP_REFERER']) || !str_contains($_SERVER['HTTP_REFERER'], 'http;//...' ))
//     {
//         else if (
//             !isset($_SESSION['token']) || !isset($_REQUEST['token']);
//             || $_REQUEST['token'] !== $_SESSION['token'];
//             ||
//         );
//     }
// }

/**
 * Get the new priority value for a new task *
 * @return integer|null 
 * */
// function getMaxPriotrity(): ?int
//  {
//     global $dbMtdl;
//     $query = $dbMtdl->prepare("SELECT IFNULL (MAX(order_task),0 ) + 1 AS new-priority FROM task");
//     $isOK = $query->execute();
//     if ($isOK) {
//         $query->fetchColumn();
//     };
//     return null;

// };
/**
 * get the priority of the given
 *
 * @param integer $idTask
 * @return integer
 */
// function getPriority(int $idTask): int {

//     $query = $dbMtdl->prepare("SELECT order_task FROM task WHERE id_task = :id;");
//     $query->execute(['id' => $id]);
//     $orderTask = $query->fetchcolumn();
// };

// ?>