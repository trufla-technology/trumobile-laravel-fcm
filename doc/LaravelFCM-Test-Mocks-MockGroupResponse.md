TruMobileLaravelFCM\Test\Mocks\MockGroupResponse
===============

Class MockGroupResponse **Only use it for testing**




* Class name: MockGroupResponse
* Namespace: TruMobileLaravelFCM\Test\Mocks
* This class implements: [TruMobileLaravelFCM\Response\GroupResponseContract](TruMobileLaravelFCM-Response-GroupResponseContract.md)






Methods
-------


### setNumberSuccess

    mixed TruMobileLaravelFCM\Test\Mocks\MockGroupResponse::setNumberSuccess($numberSuccess)

set number of success



* Visibility: **public**


#### Arguments
* $numberSuccess **mixed**



### numberSuccess

    integer TruMobileLaravelFCM\Response\GroupResponseContract::numberSuccess()

Get the number of device reached with success



* Visibility: **public**
* This method is defined by [TruMobileLaravelFCM\Response\GroupResponseContract](TruMobileLaravelFCM-Response-GroupResponseContract.md)




### setNumberFailure

    mixed TruMobileLaravelFCM\Test\Mocks\MockGroupResponse::setNumberFailure($numberFailures)

set number of failures



* Visibility: **public**


#### Arguments
* $numberFailures **mixed**



### numberFailure

    integer TruMobileLaravelFCM\Response\GroupResponseContract::numberFailure()

Get the number of device which thrown an error



* Visibility: **public**
* This method is defined by [TruMobileLaravelFCM\Response\GroupResponseContract](TruMobileLaravelFCM-Response-GroupResponseContract.md)




### addTokenFailed

    mixed TruMobileLaravelFCM\Test\Mocks\MockGroupResponse::addTokenFailed($tokenFailed)

add a token to the failed list



* Visibility: **public**


#### Arguments
* $tokenFailed **mixed**



### tokensFailed

    array TruMobileLaravelFCM\Response\GroupResponseContract::tokensFailed()

Get all token in group that fcm cannot reach



* Visibility: **public**
* This method is defined by [TruMobileLaravelFCM\Response\GroupResponseContract](TruMobileLaravelFCM-Response-GroupResponseContract.md)



