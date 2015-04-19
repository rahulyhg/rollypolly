<?php
// @codingStandardsIgnoreFile
// @codeCoverageIgnoreStart
// this is an autogenerated file - do not edit
spl_autoload_register(
    function($class) {
        static $classes = null;
        if ($classes === null) {
            $classes = array(
                'accessortest' => '/ludoDB/Tests/AccessorTest.php',
                'achild' => '/ludoDB/Tests/classes/Dependencies/AChild.php',
                'acity' => '/ludoDB/Tests/classes/Dependencies/ACity.php',
                'allcarproperties' => '/ludoDB/Tests/classes/AllCarProperties.php',
                'allchessfstests' => '/../chessFS/tests/AllChessFSTests.php',
                'allchesstests' => '/Tests/AllChessTests.php',
                'allservices' => '/AllServices.php',
                'anotherchild' => '/ludoDB/Tests/classes/Dependencies/AnotherChild.php',
                'aparent' => '/ludoDB/Tests/classes/Dependencies/AParent.php',
                'asibling' => '/ludoDB/Tests/classes/Dependencies/ASibling.php',
                'author' => '/ludoDB/examples/mod_rewrite/Author.php',
                'availableservicestest' => '/ludoDB/Tests/AvailableServicesTest.php',
                'board0x88config' => '/../parser/Board0x88Config.php',
                'book' => '/ludoDB/examples/mod_rewrite/Book.php',
                'bookauthor' => '/ludoDB/examples/mod_rewrite/BookAuthor.php',
                'bookauthors' => '/ludoDB/examples/mod_rewrite/BookAuthors.php',
                'brand' => '/ludoDB/Tests/classes/Brand.php',
                'cachetest' => '/ludoDB/Tests/CacheTest.php',
                'capital' => '/ludoDB/Tests/classes/JSONCaching/Capital.php',
                'capitals' => '/ludoDB/Tests/classes/JSONCaching/Capitals.php',
                'car' => '/ludoDB/Tests/classes/Car.php',
                'carcollection' => '/ludoDB/Tests/classes/CarCollection.php',
                'carproperties' => '/ludoDB/Tests/classes/CarProperties.php',
                'carproperty' => '/ludoDB/Tests/classes/CarProperty.php',
                'carswithproperties' => '/ludoDB/Tests/classes/CarsWithProperties.php',
                'chat' => '/chat/Chat.php',
                'chatmessage' => '/chat/ChatMessage.php',
                'chatmessages' => '/chat/ChatMessages.php',
                'chess_json' => '/..//CHESS_JSON.php',
                'chessdbinstaller' => '/ChessDBInstaller.php',
                'chessengine' => '/../engine/ChessEngine.php',
                'chessfileupload' => '/ChessFileUpload.php',
                'chessfs' => '/../chessFS/ChessFS.php',
                'chessfspgn' => '/../chessFS/ChessFSPgn.php',
                'chessprogressbar' => '/../db/ChessProgressBar.php',
                'chessprogressbarcompletedstep' => '/../db/ChessProgressBarCompletedStep.php',
                'chessprogressbartemplate' => '/../db/ChessProgressBarTemplate.php',
                'chessprogressbartplstep' => '/../db/ChessProgressBarTplStep.php',
                'chessregistry' => '/..//ChessRegistry.php',
                'chessroles' => '/Roles.php',
                'chesstests' => '/Tests/ChessTests.php',
                'city' => '/ludoDB/Tests/classes/City.php',
                'client' => '/ludoDB/Tests/classes/Client.php',
                'collectiontest' => '/ludoDB/Tests/CollectionTest.php',
                'columnaliastest' => '/ludoDB/Tests/ColumnAliasTest.php',
                'configparsertest' => '/ludoDB/Tests/ConfigParserTest.php',
                'configparsertestjson' => '/ludoDB/Tests/ConfigParserTestJSON.php',
                'countries' => '/player/Countries.php',
                'country' => '/player/Country.php',
                'currentplayer' => '/player/CurrentPlayer.php',
                'database' => '/Database.php',
                'databases' => '/Databases.php',
                'democities' => '/ludoDB/examples/cities/DemoCities.php',
                'democity' => '/ludoDB/examples/cities/DemoCity.php',
                'democountries' => '/ludoDB/examples/cities/DemoCountries.php',
                'democountry' => '/ludoDB/examples/cities/DemoCountry.php',
                'demostate' => '/ludoDB/examples/cities/DemoState.php',
                'demostates' => '/ludoDB/examples/cities/DemoStates.php',
                'dgtgameparser' => '/../parser/DGTGameParser.php',
                'eco' => '/eco/Eco.php',
                'ecomoves' => '/eco/EcoMoves.php',
                'elo' => '/Elo.php',
                'elosetter' => '/EloSetter.php',
                'elotest' => '/Tests/EloTest.php',
                'fen' => '/Fen.php',
                'fenparser0x88' => '/../parser/FenParser0x88.php',
                'fentest' => '/Tests/FenTest.php',
                'folder' => '/Folder.php',
                'folders' => '/Folders.php',
                'forsqltest' => '/ludoDB/Tests/classes/ForSQLTest.php',
                'fs_gametest' => '/../chessFS/tests/FS_GameTest.php',
                'fs_testbase' => '/../chessFS/tests/FS_TestBase.php',
                'game' => '/game/Game.php',
                'gamecategory' => '/GameCategory.php',
                'gameimport' => '/game/GameImport.php',
                'gameparser' => '/../parser/GameParser.php',
                'games' => '/game/Games.php',
                'gametest' => '/Tests/GameTest.php',
                'grandparent' => '/ludoDB/Tests/classes/Dependencies/GrandParent.php',
                'importtest' => '/Tests/ImportTest.php',
                'ixhprofruns' => '/ludoDB/xhprof/xhprof_lib/utils/xhprof_runs.php',
                'jsontest' => '/ludoDB/Tests/JSONTest.php',
                'leafnode' => '/ludoDB/Tests/classes/LeafNode.php',
                'leafnodes' => '/ludoDB/Tests/classes/LeafNodes.php',
                'ludodb' => '/ludoDB/LudoDB.php',
                'ludodbadapter' => '/ludoDB/LudoDBInterfaces.php',
                'ludodbadaptertest' => '/ludoDB/Tests/LudoDBAdapterTest.php',
                'ludodballtests' => '/ludoDB/Tests/LudoDBAllTests.php',
                'ludodbcache' => '/ludoDB/LudoDBCache.php',
                'ludodbclassnotfoundexception' => '/ludoDB/LudoDBExceptions.php',
                'ludodbcollection' => '/ludoDB/LudoDBCollection.php',
                'ludodbcollectionconfigparser' => '/ludoDB/LudoDBCollectionConfigParser.php',
                'ludodbconfigparser' => '/ludoDB/LudoDBConfigParser.php',
                'ludodbconnectionexception' => '/ludoDB/LudoDBExceptions.php',
                'ludodbexception' => '/ludoDB/LudoDBExceptions.php',
                'ludodbinvalidargumentsexception' => '/ludoDB/LudoDBExceptions.php',
                'ludodbinvalidconfigexception' => '/ludoDB/LudoDBExceptions.php',
                'ludodbinvalidmodeldataexception' => '/ludoDB/LudoDBExceptions.php',
                'ludodbinvalidserviceexception' => '/ludoDB/LudoDBExceptions.php',
                'ludodbiterator' => '/ludoDB/LudoDBIterator.php',
                'ludodbmodel' => '/ludoDB/LudoDBModel.php',
                'ludodbmodeltests' => '/ludoDB/Tests/LudoDBModelTests.php',
                'ludodbmysql' => '/ludoDB/LudoDBMysql.php',
                'ludodbmysqli' => '/ludoDB/LudoDBMySqlI.php',
                'ludodbobject' => '/ludoDB/LudoDBObject.php',
                'ludodbobjectnotfoundexception' => '/ludoDB/LudoDBExceptions.php',
                'ludodbpdo' => '/ludoDB/LudoDBPDO.php',
                'ludodbpdooracle' => '/ludoDB/LudoDBPDOOracle.php',
                'ludodbprofiling' => '/ludoDB/LudoDBProfiling.php',
                'ludodbregistry' => '/ludoDB/LudoDBRegistry.php',
                'ludodbrequesthandler' => '/ludoDB/LudoDBRequestHandler.php',
                'ludodbrevision' => '/ludoDB/LudoDBRevision.php',
                'ludodbservice' => '/ludoDB/LudoDBInterfaces.php',
                'ludodbservicenotimplementedexception' => '/ludoDB/LudoDBExceptions.php',
                'ludodbserviceregistry' => '/ludoDB/LudoDBServiceRegistry.php',
                'ludodbsql' => '/ludoDB/LudoDBSQL.php',
                'ludodbtreecollection' => '/ludoDB/LudoDBTreeCollection.php',
                'ludodbtreecollectiontest' => '/ludoDB/Tests/LudoDBTreeCollectionTest.php',
                'ludodbunauthorizedexception' => '/ludoDB/LudoDBExceptions.php',
                'ludodbutility' => '/ludoDB/LudoDBUtility.php',
                'ludodbutilitymock' => '/ludoDB/Tests/LudoDBUtilityTest.php',
                'ludodbutilitytest' => '/ludoDB/Tests/LudoDBUtilityTest.php',
                'ludodbvalidationtest' => '/ludoDB/Tests/LudoDBValidationTest.php',
                'ludodbvalidator' => '/ludoDB/LudoDBValidator.php',
                'ludojs' => '/ludoDB/LudoJS.php',
                'ludojscountries' => '/ludoDB/Tests/classes/LudoJS/LudoJSCountries.php',
                'ludojscountry' => '/ludoDB/Tests/classes/LudoJS/LudoJSCountry.php',
                'ludojsperson' => '/ludoDB/Tests/classes/LudoJS/LudoJSPerson.php',
                'ludojstests' => '/ludoDB/Tests/LudoJSTests.php',
                'manager' => '/ludoDB/Tests/classes/Manager.php',
                'metadata' => '/game/Metadata.php',
                'metadatacollection' => '/game/MetadataCollection.php',
                'metadatatest' => '/Tests/MetadataTest.php',
                'metadatavalue' => '/game/MetadataValue.php',
                'modelwithsqlmethod' => '/ludoDB/Tests/classes/ModelWithSqlMethod.php',
                'move' => '/game/Move.php',
                'movebuilder' => '/../parser/MoveBuilder.php',
                'moves' => '/game/Moves.php',
                'movie' => '/ludoDB/Tests/classes/Movie.php',
                'mysqlitests' => '/ludoDB/Tests/MysqlITests.php',
                'noludodbclass' => '/ludoDB/Tests/classes/Dependencies/NoLudoDBClass.php',
                'parsertest' => '/../parser/test/ParserTest.php',
                'passwordlookup' => '/PasswordLookup.php',
                'passwordlookuptest' => '/Tests/PasswordLookupTest.php',
                'pdotests' => '/ludoDB/Tests/PDOTests.php',
                'people' => '/ludoDB/Tests/classes/People.php',
                'peoplepaged' => '/ludoDB/Tests/classes/PeoplePaged.php',
                'peopleplain' => '/ludoDB/Tests/classes/PeoplePlain.php',
                'performancetest' => '/ludoDB/Tests/PerformanceTest.php',
                'person' => '/ludoDB/Tests/classes/Person.php',
                'personforconfigparser' => '/ludoDB/Tests/classes/PersonForConfigParser.php',
                'personforutility' => '/ludoDB/Tests/classes/PersonForUtility.php',
                'personwithvalidation' => '/ludoDB/Tests/classes/Validation/PersonWithValidation.php',
                'pgngameparser' => '/../parser/PgnGameParser.php',
                'pgnparser' => '/../parser/PgnParser.php',
                'phone' => '/ludoDB/Tests/classes/Phone.php',
                'phonecollection' => '/ludoDB/Tests/classes/PhoneCollection.php',
                'player' => '/player/Player.php',
                'playerbyemail' => '/player/PlayerByEmail.php',
                'playerbyname' => '/player/PlayerByName.php',
                'playerbyusernamepassword' => '/player/PlayerByUsernamePassword.php',
                'playergames' => '/player/PlayerGames.php',
                'playertest' => '/Tests/PlayerTest.php',
                'remotefilereader' => '/..//RemoteFileReader.php',
                'requesthandlermock' => '/ludoDB/Tests/classes/RequestHandlerMock.php',
                'requesthandlertest' => '/ludoDB/Tests/RequestHandlerTest.php',
                'section' => '/ludoDB/Tests/classes/Section.php',
                'seek' => '/Seek.php',
                'seeks' => '/Seeks.php',
                'seektest' => '/Tests/SeekTest.php',
                'services_json' => '/../jsonwrapper/JSON/JSON.php',
                'services_json_assocarray_testcase' => '/../jsonwrapper/JSON/Test-JSON.php',
                'services_json_empties_testcase' => '/../jsonwrapper/JSON/Test-JSON.php',
                'services_json_encdec_testcase' => '/../jsonwrapper/JSON/Test-JSON.php',
                'services_json_error' => '/../jsonwrapper/JSON/JSON.php',
                'services_json_errorsuppression_testcase' => '/../jsonwrapper/JSON/Test-JSON.php',
                'services_json_nestedarray_testcase' => '/../jsonwrapper/JSON/Test-JSON.php',
                'services_json_object_testcase' => '/../jsonwrapper/JSON/Test-JSON.php',
                'services_json_spaces_comments_testcase' => '/../jsonwrapper/JSON/Test-JSON.php',
                'services_json_unquotedkeys_testcase' => '/../jsonwrapper/JSON/Test-JSON.php',
                'session' => '/Session.php',
                'sessiontest' => '/Tests/SessionTest.php',
                'sqltest' => '/ludoDB/Tests/SQLTest.php',
                'testbase' => '/ludoDB/Tests/TestBase.php',
                'testcountry' => '/ludoDB/Tests/classes/TestCountry.php',
                'testgame' => '/ludoDB/Tests/classes/TestGame.php',
                'testnode' => '/ludoDB/Tests/classes/TestNode.php',
                'testnodes' => '/ludoDB/Tests/classes/TestNodes.php',
                'testnodeswithleafs' => '/ludoDB/Tests/classes/TestNodesWithLeafs.php',
                'testtable' => '/ludoDB/Tests/classes/TestTable.php',
                'testtimer' => '/ludoDB/Tests/classes/TestTimer.php',
                'timecontrol' => '/TimeControl.php',
                'timecontrols' => '/TimeControls.php',
                'xhpprofiling' => '/ludoDB/xhprof/XHPProfiling.php',
                'xhprofruns_default' => '/ludoDB/xhprof/xhprof_lib/utils/xhprof_runs.php'
            );
        }
        $cn = strtolower($class);
        if (isset($classes[$cn])) {
            require __DIR__ . $classes[$cn];
        }
    }
);
// @codeCoverageIgnoreEnd