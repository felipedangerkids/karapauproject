@extends('layouts.app')

@section('content')
<div class="container">
      <table class="mt-4">
            <thead>
                  <tr>
                        <th scope="col">Account</th>
                        <th scope="col">Due Date</th>
                        <th scope="col">Amount</th>
                        <th scope="col">Period</th>
                  </tr>
            </thead>
            <tbody>
                        <tr>
                              <td data-label="Account">Visa - 3412</td>
                              <td data-label="Due Date">04/01/2016</td>
                              <td data-label="Amount">$1,190</td>
                              <td data-label="Period">
                                    <button class="btn btn-dark">Ver</button>
                              </td>
                        </tr>
                        <tr>
                              <td data-label="Account">Visa - 3412</td>
                              <td data-label="Due Date">04/01/2016</td>
                              <td data-label="Amount">$1,190</td>
                              <td data-label="Period">
                                    <button class="btn btn-dark">Ver</button>
                              </td>
                        </tr>
            </tbody>
      </table>
</div>
@endsection