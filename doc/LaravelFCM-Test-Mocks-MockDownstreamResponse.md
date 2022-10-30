TruMobileLaravelFCM\Test\Mocks\MockDownstreamResponse
===============

Class MockDownstreamResponse **Only use it for testing**




* Class name: MockDownstreamResponse
* Namespace: TruMobileLaravelFCM\Test\Mocks
* This class implements: [TruMobileLaravelFCM\Response\DownstreamResponseContract](TruMobileLaravelFCM-Response-DownstreamResponseContract.md)






Methods
-------


### __construct

    mixed TruMobileLaravelFCM\Test\Mocks\MockDownstreamResponse::__construct($numberSuccess)

DownstreamResponse constructor.



* Visibility: **public**


#### Arguments
* $numberSuccess **mixed**



### merge

    mixed TruMobileLaravelFCM\Response\DownstreamResponseContract::merge(\TruMobileLaravelFCM\Response\DownstreamResponse $response)

Merge two response



* Visibility: **public**
* This method is defined by [TruMobileLaravelFCM\Response\DownstreamResponseContract](TruMobileLaravelFCM-Response-DownstreamResponseContract.md)


#### Arguments
* $response **[TruMobileLaravelFCM\Response\DownstreamResponse](TruMobileLaravelFCM-Response-DownstreamResponse.md)**



### numberSuccess

    integer TruMobileLaravelFCM\Response\DownstreamResponseContract::numberSuccess()

Get the number of device reached with success



* Visibility: **public**
* This method is defined by [TruMobileLaravelFCM\Response\DownstreamResponseContract](TruMobileLaravelFCM-Response-DownstreamResponseContract.md)




### numberFailure

    integer TruMobileLaravelFCM\Response\DownstreamResponseContract::numberFailure()

Get the number of device which thrown an error



* Visibility: **public**
* This method is defined by [TruMobileLaravelFCM\Response\DownstreamResponseContract](TruMobileLaravelFCM-Response-DownstreamResponseContract.md)




### numberModification

    integer TruMobileLaravelFCM\Response\DownstreamResponseContract::numberModification()

Get the number of device that you need to modify their token



* Visibility: **public**
* This method is defined by [TruMobileLaravelFCM\Response\DownstreamResponseContract](TruMobileLaravelFCM-Response-DownstreamResponseContract.md)




### addTokenToDelete

    mixed TruMobileLaravelFCM\Test\Mocks\MockDownstreamResponse::addTokenToDelete($token)

Add a token to delete



* Visibility: **public**


#### Arguments
* $token **mixed**



### tokensToDelete

    array TruMobileLaravelFCM\Response\DownstreamResponseContract::tokensToDelete()

get token to delete

remove all tokens returned by this method in your database

* Visibility: **public**
* This method is defined by [TruMobileLaravelFCM\Response\DownstreamResponseContract](TruMobileLaravelFCM-Response-DownstreamResponseContract.md)




### addTokenToModify

    mixed TruMobileLaravelFCM\Test\Mocks\MockDownstreamResponse::addTokenToModify($oldToken, $newToken)

Add a token to modify



* Visibility: **public**


#### Arguments
* $oldToken **mixed**
* $newToken **mixed**



### tokensToModify

    array TruMobileLaravelFCM\Response\DownstreamResponseContract::tokensToModify()

get token to modify

key: oldToken
value: new token

find the old token in your database and replace it with the new one

* Visibility: **public**
* This method is defined by [TruMobileLaravelFCM\Response\DownstreamResponseContract](TruMobileLaravelFCM-Response-DownstreamResponseContract.md)




### addTokenToRetry

    mixed TruMobileLaravelFCM\Test\Mocks\MockDownstreamResponse::addTokenToRetry($token)

Add a token to retry



* Visibility: **public**


#### Arguments
* $token **mixed**



### tokensToRetry

    array TruMobileLaravelFCM\Response\DownstreamResponseContract::tokensToRetry()

Get tokens that you should resend using exponential backoof



* Visibility: **public**
* This method is defined by [TruMobileLaravelFCM\Response\DownstreamResponseContract](TruMobileLaravelFCM-Response-DownstreamResponseContract.md)




### addTokenWithError

    mixed TruMobileLaravelFCM\Test\Mocks\MockDownstreamResponse::addTokenWithError($token, $message)

Add a token to errors



* Visibility: **public**


#### Arguments
* $token **mixed**
* $message **mixed**



### tokensWithError

    array TruMobileLaravelFCM\Response\DownstreamResponseContract::tokensWithError()

Get tokens that thrown an error

key : token
value : error

In production, remove these tokens from you database

* Visibility: **public**
* This method is defined by [TruMobileLaravelFCM\Response\DownstreamResponseContract](TruMobileLaravelFCM-Response-DownstreamResponseContract.md)




### setMissingToken

    mixed TruMobileLaravelFCM\Test\Mocks\MockDownstreamResponse::setMissingToken($hasMissingToken)

change missing token state



* Visibility: **public**


#### Arguments
* $hasMissingToken **mixed**



### hasMissingToken

    boolean TruMobileLaravelFCM\Response\DownstreamResponseContract::hasMissingToken()

check if missing tokens was given to the request
If true, remove all the empty token in your database



* Visibility: **public**
* This method is defined by [TruMobileLaravelFCM\Response\DownstreamResponseContract](TruMobileLaravelFCM-Response-DownstreamResponseContract.md)



