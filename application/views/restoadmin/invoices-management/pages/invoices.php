
<div class="row">
  <div class="col-lg-12">
    <div class="card" id="invoiceList">
      <div class="card-header border-0">
        <div class="d-flex align-items-center">
          <h5 class="card-title mb-0 flex-grow-1">Invoices</h5>

            <div class="row justify-content-end" >
                    <div class="col-sm-12">
                    <div id="export-buttons"> 
                </div>  
        </div>
      </div>

     
    </div>
</div>

 <!--keme keme -->

       <div class="card-body">
                                <table id="buttons-datatables" class="table table-bordered nowrap table-striped align-middle" style="width:100%">
                                        <thead>
                                            <tr>
                                                <th>Payment No.</th>
                                                <th>Order No.</th>                                          
                                                <th>Customer</th> 
                                                <th>Date Ordered</th>
                                                <th>Payment Status</th>
                                                <th>Payment Total</th>
                                              
                                                
                                                <th>Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <!--number 1 -->
                                            <tr>
                                                <td>1400090321</td>                           
                                                <td>1400090321</td>                                                              
                                                <td>Joseph Parker</td>
                                                <td>09 Jul, 2022 2:05 PM</td>                                           
                                                <td><span class="badge badge-soft-warning">IN PROCESS</span></td>
                                                <td>₱840.00</td>
                                                
                                                <td>
                                                    <ul class="list-inline hstack gap-2 mb-0">
                                                    <li class="list-inline-item" data-bs-toggle="tooltip" data-bs-trigger="hover" data-bs-placement="top" title="View">
                                                        <a href="apps-ecommerce-order-details.html" class="text-primary d-inline-block">
                                                        <i class="ri-eye-fill fs-16"></i>
                                                        </a>
                                                    </li>
                                                    <li class="list-inline-item edit" data-bs-toggle="tooltip" data-bs-trigger="hover" data-bs-placement="top" title="Edit">
                                                        <a href="#showModal" data-bs-toggle="modal" class="text-primary d-inline-block edit-item-btn">
                                                        <i class="ri-pencil-fill fs-16"></i>
                                                        </a>
                                                    </li>
                                                    <li class="list-inline-item" data-bs-toggle="tooltip" data-bs-trigger="hover" data-bs-placement="top" title="Remove">
                                                        <a class="text-danger d-inline-block remove-item-btn" data-bs-toggle="modal" href="#deleteOrder">
                                                        <i class="ri-delete-bin-5-fill fs-16"></i>
                                                        </a>
                                                    </li>
                                                    </ul>
                                                </td>
                                            </tr>
                                            <!--number 2-->
                                            <tr>
                                                <td>1400090322</td>
                                                <td>1400090322</td>                                                               
                                                <td>Keirra Zylene Ynares</td>
                                                <td>09 Jul, 2022 3:00 PM</td>                                           
                                                <td><span class="badge badge-soft-secondary">ON THE WAY</span></td>
                                                <td>₱305.00</td>
                                            
                                                <td>
                                                    <ul class="list-inline hstack gap-2 mb-0">
                                                    <li class="list-inline-item" data-bs-toggle="tooltip" data-bs-trigger="hover" data-bs-placement="top" title="View">
                                                        <a href="apps-ecommerce-order-details.html" class="text-primary d-inline-block">
                                                        <i class="ri-eye-fill fs-16"></i>
                                                        </a>
                                                    </li>
                                                    <li class="list-inline-item edit" data-bs-toggle="tooltip" data-bs-trigger="hover" data-bs-placement="top" title="Edit">
                                                        <a href="#showModal" data-bs-toggle="modal" class="text-primary d-inline-block edit-item-btn">
                                                        <i class="ri-pencil-fill fs-16"></i>
                                                        </a>
                                                    </li>
                                                    <li class="list-inline-item" data-bs-toggle="tooltip" data-bs-trigger="hover" data-bs-placement="top" title="Remove">
                                                        <a class="text-danger d-inline-block remove-item-btn" data-bs-toggle="modal" href="#deleteOrder">
                                                        <i class="ri-delete-bin-5-fill fs-16"></i>
                                                        </a>
                                                    </li>
                                                    </ul>
                                                </td>
                                            </tr>
                                           <!--number 3-->
                                           <tr>
                                                <td>1400090323</td>
                                                <td>1400090323</td>                                                               
                                                <td>Diana Kohler</td>
                                                <td>09 Jul, 2022 2:58 PM</td>                                           
                                                <td><span class="badge badge-soft-secondary">ON THE WAY</span></td>
                                                <td>₱305.00</td>                                            
                                             
                                                <td>
                                                    <ul class="list-inline hstack gap-2 mb-0">
                                                    <li class="list-inline-item" data-bs-toggle="tooltip" data-bs-trigger="hover" data-bs-placement="top" title="View">
                                                        <a href="apps-ecommerce-order-details.html" class="text-primary d-inline-block">
                                                        <i class="ri-eye-fill fs-16"></i>
                                                        </a>
                                                    </li>
                                                    <li class="list-inline-item edit" data-bs-toggle="tooltip" data-bs-trigger="hover" data-bs-placement="top" title="Edit">
                                                        <a href="#showModal" data-bs-toggle="modal" class="text-primary d-inline-block edit-item-btn">
                                                        <i class="ri-pencil-fill fs-16"></i>
                                                        </a>
                                                    </li>
                                                    <li class="list-inline-item" data-bs-toggle="tooltip" data-bs-trigger="hover" data-bs-placement="top" title="Remove">
                                                        <a class="text-danger d-inline-block remove-item-btn" data-bs-toggle="modal" href="#deleteOrder">
                                                        <i class="ri-delete-bin-5-fill fs-16"></i>
                                                        </a>
                                                    </li>
                                                    </ul>
                                                </td>
                                            </tr>
                                            <!--number 4 -->
                                            <tr>
                                                <td>1400090324</td>
                                                <td>1400090324</td>                                          
                                                <td>Joseph Parker</td>
                                                <td>09 Jul, 2022 2:45 PM</td>                                           
                                                <td><span class="badge badge-soft-danger">REJECTED</span></td>
                                                <td>₱1,107.00 </td>                                           
                                                <td>
                                                    <ul class="list-inline hstack gap-2 mb-0">
                                                    <li class="list-inline-item" data-bs-toggle="tooltip" data-bs-trigger="hover" data-bs-placement="top" title="View">
                                                        <a href="apps-ecommerce-order-details.html" class="text-primary d-inline-block">
                                                        <i class="ri-eye-fill fs-16"></i>
                                                        </a>
                                                    </li>
                                                    <li class="list-inline-item edit" data-bs-toggle="tooltip" data-bs-trigger="hover" data-bs-placement="top" title="Edit">
                                                        <a href="#showModal" data-bs-toggle="modal" class="text-primary d-inline-block edit-item-btn">
                                                        <i class="ri-pencil-fill fs-16"></i>
                                                        </a>
                                                    </li>
                                                    <li class="list-inline-item" data-bs-toggle="tooltip" data-bs-trigger="hover" data-bs-placement="top" title="Remove">
                                                        <a class="text-danger d-inline-block remove-item-btn" data-bs-toggle="modal" href="#deleteOrder">
                                                        <i class="ri-delete-bin-5-fill fs-16"></i>
                                                        </a>
                                                    </li>
                                                    </ul>
                                                    </div>
                                                </td>
                                            </tr>
                                            <!--number 5-->
                                            <tr>
                                                <td>1400090325</td>
                                                <td>1400090325</td>                                       
                                                <td>Donald Palmer</td> 
                                                <td>09 Jul, 2022 2:30 PM</td>                                           
                                                <td><span class="badge badge-soft-success">DELIVERED</span></td>
                                                <td>₱215.00</td>
                                              
                                                <td>
                                                    <ul class="list-inline hstack gap-2 mb-0">
                                                    <li class="list-inline-item" data-bs-toggle="tooltip" data-bs-trigger="hover" data-bs-placement="top" title="View">
                                                        <a href="apps-ecommerce-order-details.html" class="text-primary d-inline-block">
                                                        <i class="ri-eye-fill fs-16"></i>
                                                        </a>
                                                    </li>
                                                    <li class="list-inline-item edit" data-bs-toggle="tooltip" data-bs-trigger="hover" data-bs-placement="top" title="Edit">
                                                        <a href="#showModal" data-bs-toggle="modal" class="text-primary d-inline-block edit-item-btn">
                                                        <i class="ri-pencil-fill fs-16"></i>
                                                        </a>
                                                    </li>
                                                    <li class="list-inline-item" data-bs-toggle="tooltip" data-bs-trigger="hover" data-bs-placement="top" title="Remove">
                                                        <a class="text-danger d-inline-block remove-item-btn" data-bs-toggle="modal" href="#deleteOrder">
                                                        <i class="ri-delete-bin-5-fill fs-16"></i>
                                                        </a>
                                                    </li>
                                                    </ul>
                                                    </div>
                                                </td>
                                            </tr>
                                            <!--number 6 -->
                                            <tr>
                                                <td>1400090326</td>
                                                <td>1400090326</td>
                                                <td>Mary Rucker</td>
                                                <td>09 Jul, 2022 2:30 PM</td>                                           
                                                <td><span class="badge badge-soft-danger">REJECTED</span></td>
                                                <td>₱350.00</td>
                                           
                                                <td>
                                                    <ul class="list-inline hstack gap-2 mb-0">
                                                    <li class="list-inline-item" data-bs-toggle="tooltip" data-bs-trigger="hover" data-bs-placement="top" title="View">
                                                        <a href="apps-ecommerce-order-details.html" class="text-primary d-inline-block">
                                                        <i class="ri-eye-fill fs-16"></i>
                                                        </a>
                                                    </li>
                                                    <li class="list-inline-item edit" data-bs-toggle="tooltip" data-bs-trigger="hover" data-bs-placement="top" title="Edit">
                                                        <a href="#showModal" data-bs-toggle="modal" class="text-primary d-inline-block edit-item-btn">
                                                        <i class="ri-pencil-fill fs-16"></i>
                                                        </a>
                                                    </li>
                                                    <li class="list-inline-item" data-bs-toggle="tooltip" data-bs-trigger="hover" data-bs-placement="top" title="Remove">
                                                        <a class="text-danger d-inline-block remove-item-btn" data-bs-toggle="modal" href="#deleteOrder">
                                                        <i class="ri-delete-bin-5-fill fs-16"></i>
                                                        </a>
                                                    </li>
                                                    </ul>
                                                    </div>
                                                </td>
                                            </tr>
                                            <!--number 7 -->
                                            <tr>
                                                <td>1400090327</td>
                                                <td>1400090327</td>
                                                <td>James Morris</td>
                                                <td>09 Jul, 2022 2:48 PM</td>                                           
                                                <td><span class="badge badge-soft-success">DELIVERED</span></td>
                                                <td>₱1,130.00</td> 
                                             
                                                <td>
                                                    <ul class="list-inline hstack gap-2 mb-0">
                                                    <li class="list-inline-item" data-bs-toggle="tooltip" data-bs-trigger="hover" data-bs-placement="top" title="View">
                                                        <a href="apps-ecommerce-order-details.html" class="text-primary d-inline-block">
                                                        <i class="ri-eye-fill fs-16"></i>
                                                        </a>
                                                    </li>
                                                    <li class="list-inline-item edit" data-bs-toggle="tooltip" data-bs-trigger="hover" data-bs-placement="top" title="Edit">
                                                        <a href="#showModal" data-bs-toggle="modal" class="text-primary d-inline-block edit-item-btn">
                                                        <i class="ri-pencil-fill fs-16"></i>
                                                        </a>
                                                    </li>
                                                    <li class="list-inline-item" data-bs-toggle="tooltip" data-bs-trigger="hover" data-bs-placement="top" title="Remove">
                                                        <a class="text-danger d-inline-block remove-item-btn" data-bs-toggle="modal" href="#deleteOrder">
                                                        <i class="ri-delete-bin-5-fill fs-16"></i>
                                                        </a>
                                                    </li>
                                                    </ul>
                                                    </div>
                                                </td>
                                            </tr>
                                            <!--number 8 -->
                                            <tr>
                                                <td>1400090328</td>
                                                <td>1400090328</td>
                                                <td>Nathan Cole</td>
                                                <td>09 Jul, 2022 2:01 PM</td>                                           
                                                <td><span class="badge badge-soft-success">DELIVERED</span></td>
                                                <td>₱550.00</td>
                                              
                                                <td>
                                                    <ul class="list-inline hstack gap-2 mb-0">
                                                    <li class="list-inline-item" data-bs-toggle="tooltip" data-bs-trigger="hover" data-bs-placement="top" title="View">
                                                        <a href="apps-ecommerce-order-details.html" class="text-primary d-inline-block">
                                                        <i class="ri-eye-fill fs-16"></i>
                                                        </a>
                                                    </li>
                                                    <li class="list-inline-item edit" data-bs-toggle="tooltip" data-bs-trigger="hover" data-bs-placement="top" title="Edit">
                                                        <a href="#showModal" data-bs-toggle="modal" class="text-primary d-inline-block edit-item-btn">
                                                        <i class="ri-pencil-fill fs-16"></i>
                                                        </a>
                                                    </li>
                                                    <li class="list-inline-item" data-bs-toggle="tooltip" data-bs-trigger="hover" data-bs-placement="top" title="Remove">
                                                        <a class="text-danger d-inline-block remove-item-btn" data-bs-toggle="modal" href="#deleteOrder">
                                                        <i class="ri-delete-bin-5-fill fs-16"></i>
                                                        </a>
                                                    </li>
                                                    </ul>
                                                    </div>
                                                </td>
                                            </tr>
                                            <!--number 9 -->
                                            <tr>
                                                <td>1400090329</td>
                                                <td>1400090329</td>
                                                <td>Grace Coles</td>
                                                <td>09 Jul, 2022 2:06 PM</td>                                           
                                                <td><span class="badge badge-soft-secondary">ON THE WAY</span></td>
                                                <td>₱148.00</td>
                                            
                                                <td>
                                                    <ul class="list-inline hstack gap-2 mb-0">
                                                    <li class="list-inline-item" data-bs-toggle="tooltip" data-bs-trigger="hover" data-bs-placement="top" title="View">
                                                        <a href="apps-ecommerce-order-details.html" class="text-primary d-inline-block">
                                                        <i class="ri-eye-fill fs-16"></i>
                                                        </a>
                                                    </li>
                                                    <li class="list-inline-item edit" data-bs-toggle="tooltip" data-bs-trigger="hover" data-bs-placement="top" title="Edit">
                                                        <a href="#showModal" data-bs-toggle="modal" class="text-primary d-inline-block edit-item-btn">
                                                        <i class="ri-pencil-fill fs-16"></i>
                                                        </a>
                                                    </li>
                                                    <li class="list-inline-item" data-bs-toggle="tooltip" data-bs-trigger="hover" data-bs-placement="top" title="Remove">
                                                        <a class="text-danger d-inline-block remove-item-btn" data-bs-toggle="modal" href="#deleteOrder">
                                                        <i class="ri-delete-bin-5-fill fs-16"></i>
                                                        </a>
                                                    </li>
                                                    </ul>
                                                    </div>
                                                </td>
                                            </tr>
                                            <!--number 10 -->
                                            <tr>
                                                <td>1400090330</td>
                                                <td>1400090330</td>
                                                <td>Alexis Clarke</td>
                                                <td>09 Jul, 2022 2:06 PM</td>                                           
                                                <td><span class="badge badge-soft-danger">REJECTED</span></td>
                                                <td>₱171.00</td>
                                            
                                                <td>
                                                    <ul class="list-inline hstack gap-2 mb-0">
                                                    <li class="list-inline-item" data-bs-toggle="tooltip" data-bs-trigger="hover" data-bs-placement="top" title="View">
                                                        <a href="apps-ecommerce-order-details.html" class="text-primary d-inline-block">
                                                        <i class="ri-eye-fill fs-16"></i>
                                                        </a>
                                                    </li>
                                                    <li class="list-inline-item edit" data-bs-toggle="tooltip" data-bs-trigger="hover" data-bs-placement="top" title="Edit">
                                                        <a href="#showModal" data-bs-toggle="modal" class="text-primary d-inline-block edit-item-btn">
                                                        <i class="ri-pencil-fill fs-16"></i>
                                                        </a>
                                                    </li>
                                                    <li class="list-inline-item" data-bs-toggle="tooltip" data-bs-trigger="hover" data-bs-placement="top" title="Remove">
                                                        <a class="text-danger d-inline-block remove-item-btn" data-bs-toggle="modal" href="#deleteOrder">
                                                        <i class="ri-delete-bin-5-fill fs-16"></i>
                                                        </a>
                                                    </li>
                                                    </ul>
                                                    </div>
                                                </td>
                                            </tr>
                                            <!--number 11 -->
                                            <tr>
                                                <td>1400090331</td>
                                                <td>1400090331</td>
                                                <td>Williams</td>
                                                <td>09 Jul, 2022 2:15 PM</td>                                           
                                                <td><span class="badge badge-soft-success">DELIVERED</span></td>
                                                <td>₱364.00</td>
                                            
                                                <td>
                                                    <ul class="list-inline hstack gap-2 mb-0">
                                                    <li class="list-inline-item" data-bs-toggle="tooltip" data-bs-trigger="hover" data-bs-placement="top" title="View">
                                                        <a href="apps-ecommerce-order-details.html" class="text-primary d-inline-block">
                                                        <i class="ri-eye-fill fs-16"></i>
                                                        </a>
                                                    </li>
                                                    <li class="list-inline-item edit" data-bs-toggle="tooltip" data-bs-trigger="hover" data-bs-placement="top" title="Edit">
                                                        <a href="#showModal" data-bs-toggle="modal" class="text-primary d-inline-block edit-item-btn">
                                                        <i class="ri-pencil-fill fs-16"></i>
                                                        </a>
                                                    </li>
                                                    <li class="list-inline-item" data-bs-toggle="tooltip" data-bs-trigger="hover" data-bs-placement="top" title="Remove">
                                                        <a class="text-danger d-inline-block remove-item-btn" data-bs-toggle="modal" href="#deleteOrder">
                                                        <i class="ri-delete-bin-5-fill fs-16"></i>
                                                        </a>
                                                    </li>
                                                    </ul>
                                                    </div>
                                                </td>
                                            </tr>
                                            <!--number 12 -->
                                            <tr>
                                                <td>1400090332</td>
                                                <td>1400090332</td>
                                                <td>₱Richard V.</td>
                                                <td>09 Jul, 2022 2:15 PM</td>                                           
                                                <td><span class="badge badge-soft-warning">IN PROCESS</span></td>
                                                <td>₱1664.00</td>
                                               
                                                <td>
                                                    <ul class="list-inline hstack gap-2 mb-0">
                                                    <li class="list-inline-item" data-bs-toggle="tooltip" data-bs-trigger="hover" data-bs-placement="top" title="View">
                                                        <a href="apps-ecommerce-order-details.html" class="text-primary d-inline-block">
                                                        <i class="ri-eye-fill fs-16"></i>
                                                        </a>
                                                    </li>
                                                    <li class="list-inline-item edit" data-bs-toggle="tooltip" data-bs-trigger="hover" data-bs-placement="top" title="Edit">
                                                        <a href="#showModal" data-bs-toggle="modal" class="text-primary d-inline-block edit-item-btn">
                                                        <i class="ri-pencil-fill fs-16"></i>
                                                        </a>
                                                    </li>
                                                    <li class="list-inline-item" data-bs-toggle="tooltip" data-bs-trigger="hover" data-bs-placement="top" title="Remove">
                                                        <a class="text-danger d-inline-block remove-item-btn" data-bs-toggle="modal" href="#deleteOrder">
                                                        <i class="ri-delete-bin-5-fill fs-16"></i>
                                                        </a>
                                                    </li>
                                                    </ul>
                                                    </div>
                                                </td>
                                            </tr>
                                            <!--number 13-->
                                            <tr>
                                                <td>1400090333</td>
                                                <td>1400090333</td>
                                                <td>Alexis Clarke</td>
                                                <td>09 Jul, 2022 3:45 PM</td>  
                                                <td><span class="badge badge-soft-secondary">ON THE WAY</span></td> 
                                                <td>₱870.00</td>
                                               
                                                <td>
                                                    <ul class="list-inline hstack gap-2 mb-0">
                                                    <li class="list-inline-item" data-bs-toggle="tooltip" data-bs-trigger="hover" data-bs-placement="top" title="View">
                                                        <a href="apps-ecommerce-order-details.html" class="text-primary d-inline-block">
                                                        <i class="ri-eye-fill fs-16"></i>
                                                        </a>
                                                    </li>
                                                    <li class="list-inline-item edit" data-bs-toggle="tooltip" data-bs-trigger="hover" data-bs-placement="top" title="Edit">
                                                        <a href="#showModal" data-bs-toggle="modal" class="text-primary d-inline-block edit-item-btn">
                                                        <i class="ri-pencil-fill fs-16"></i>
                                                        </a>
                                                    </li>
                                                    <li class="list-inline-item" data-bs-toggle="tooltip" data-bs-trigger="hover" data-bs-placement="top" title="Remove">
                                                        <a class="text-danger d-inline-block remove-item-btn" data-bs-toggle="modal" href="#deleteOrder">
                                                        <i class="ri-delete-bin-5-fill fs-16"></i>
                                                        </a>
                                                    </li>
                                                    </ul>
                                                    </div>
                                                </td>
                                            </tr>
                                            <!--number 14 -->
                                            <tr>
                                                <td>1400090335</td>
                                                <td>1400090335</td>
                                                <td>Edwin Armin</td>
                                                <td>09 Jul, 2022 4:34 PM</td>  
                                                <td><span class="badge badge-soft-danger">REJECTED</span></td>
                                                <td>₱275.00</td>
                                               
                                                <td>
                                                    <ul class="list-inline hstack gap-2 mb-0">
                                                    <li class="list-inline-item" data-bs-toggle="tooltip" data-bs-trigger="hover" data-bs-placement="top" title="View">
                                                        <a href="apps-ecommerce-order-details.html" class="text-primary d-inline-block">
                                                        <i class="ri-eye-fill fs-16"></i>
                                                        </a>
                                                    </li>
                                                    <li class="list-inline-item edit" data-bs-toggle="tooltip" data-bs-trigger="hover" data-bs-placement="top" title="Edit">
                                                        <a href="#showModal" data-bs-toggle="modal" class="text-primary d-inline-block edit-item-btn">
                                                        <i class="ri-pencil-fill fs-16"></i>
                                                        </a>
                                                    </li>
                                                    <li class="list-inline-item" data-bs-toggle="tooltip" data-bs-trigger="hover" data-bs-placement="top" title="Remove">
                                                        <a class="text-danger d-inline-block remove-item-btn" data-bs-toggle="modal" href="#deleteOrder">
                                                        <i class="ri-delete-bin-5-fill fs-16"></i>
                                                        </a>
                                                    </li>
                                                    </ul>
                                                    </div>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>