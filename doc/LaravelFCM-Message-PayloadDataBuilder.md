TruMobileLaravelFCM\Message\PayloadDataBuilder
===============

Class PayloadDataBuilder

Official google documentation :


* Class name: PayloadDataBuilder
* Namespace: TruMobileLaravelFCM\Message







Methods
-------


### addData

    \TruMobileLaravelFCM\Message\PayloadDataBuilder TruMobileLaravelFCM\Message\PayloadDataBuilder::addData(array $data)

add data to existing data



* Visibility: **public**


#### Arguments
* $data **array**



### setData

    \TruMobileLaravelFCM\Message\PayloadDataBuilder TruMobileLaravelFCM\Message\PayloadDataBuilder::setData(array $data)

erase data with new data



* Visibility: **public**


#### Arguments
* $data **array**



### removeAllData

    mixed TruMobileLaravelFCM\Message\PayloadDataBuilder::removeAllData()

Remove all data



* Visibility: **public**




### getData

    array TruMobileLaravelFCM\Message\PayloadDataBuilder::getData()

return data



* Visibility: **public**




### build

    \TruMobileLaravelFCM\Message\PayloadData TruMobileLaravelFCM\Message\PayloadDataBuilder::build()

generate a PayloadData



* Visibility: **public**



