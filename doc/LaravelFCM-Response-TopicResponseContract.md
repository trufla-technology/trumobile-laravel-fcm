TruMobileLaravelFCM\Response\TopicResponseContract
===============

Interface TopicResponseContract




* Interface name: TopicResponseContract
* Namespace: TruMobileLaravelFCM\Response
* This is an **interface**






Methods
-------


### isSuccess

    boolean TruMobileLaravelFCM\Response\TopicResponseContract::isSuccess()

true if topic sent with success



* Visibility: **public**




### error

    string TruMobileLaravelFCM\Response\TopicResponseContract::error()

return error message
you should test if it's necessary to resent it



* Visibility: **public**




### shouldRetry

    boolean TruMobileLaravelFCM\Response\TopicResponseContract::shouldRetry()

return true if it's necessary resent it using exponential backoff



* Visibility: **public**



