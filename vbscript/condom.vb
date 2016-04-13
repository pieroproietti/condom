Public Function FieldNames() As String

    Dim sTable As String
    Dim rs As DAO.Recordset
    Dim n As Long
    Dim sResult As String

    sTable = InputBox("Name of table?")
    If sTable = "" Then
        Exit Function
    End If

    Set rs = CurrentDb.OpenRecordset(sTable)

    sResult = "<?php " & vbCrLf
    sResult = sResult & "function " & sTable & "Create($ds, $dd)" & vbCrLf
    sResult = sResult & "{" & vbCrLf
    sResult = sResult & "   $dbstring = 'drop table `affitti`;';" & vbCrLf
    sResult = sResult & "   echo ""Creazione " & sTable & "; \r\n"";" & vbCrLf
    sResult = sResult & "   $dd->query($dbstring);" & vbCrLf
    sResult = sResult & "   $dbstring = '" & vbCrLf
    With rs
        For n = 0 To .Fields.Count - 1
            sResult = sResult & "   `" & .Fields(n).Name & "` "
            sResult = sResult & GetType(.Fields(n).Type)
            sResult = sResult & .Fields(n).Size & ") DEFAULT NULL, " & vbCrLf
        Next 'n
        .Close
    End With
    sResult = sResult & " "") ENGINE=InnoDB DEFAULT CHARSET=latin1; ';" & vbCrLf
    sResult = sResult & "}" & vbCrLf
    sResult = sResult & vbCrLf

    Set rs = Nothing
    Set rs = CurrentDb.OpenRecordset(sTable)
    sResult = sResult & "function " & sTable & "Copy($ds, $dd)" & vbCrLf
    sResult = sResult & "{" & vbCrLf
    sResult = sResult & "   $sql=""SELECT "";" & vbCrLf
    For x = 0 To rs.Fields.Count - 1
        sResult = sResult & "   $sql.=""" & rs.Fields(x).Name & ", "";" & vbCrLf
    Next
    sResult = sResult & "   $sql .= 'FROM " & sTable & " ';" & vbCrLf
    sResult = sResult & "   $sql .= 'WHERE 1';" & vbCrLf

    sResult = sResult & "   echo '<br/>';" & vbCrLf
    sResult = sResult & "   echo $sql;" & vbCrLf
    sResult = sResult & "   echo '<br/>';" & vbCrLf
    sResult = sResult & "   $rows = $ds->query($sql, PDO::FETCH_ASSOC);" & vbCrLf
    sResult = sResult & "   foreach ($rows as $row) {" & vbCrLf
    sResult = sResult & "      $dd->insert('affitti', $row);" & vbCrLf
    sResult = sResult & "   }" & vbCrLf
    sResult = sResult & "}" & vbCrLf


    Set rs = Nothing

    InputBox "Result:" & vbCrLf & vbCrLf _
            & "Copy this text (it looks jumbled, but it has one field on each line)", _
            "FieldNames()", sResult


End Function

Function GetType(i)

Select Case i
    Case dbBigInt
    GetType = "dbBigInt"
    GetType = "int("

    Case dbBinary
    GetType = "dbBinary"

    Case dbByte
    GetType = "dbByte"

    Case dbChar
    GetType = "dbChar"


    Case dbCurrency
    GetType = "dbCurrency"
    GetType = "decimal("

    Case dbDate
    GetType = "datetime"

    Case dbDecimal
    GetType = "dbDecimal"
    GetType = "decimal("

    Case dbDouble
    GetType = "dbDouble"
    GetType = "decimal("

    Case dbFloat
    GetType = "dbFloat"

    Case dbGUID
    GetType = "dbGUID"

    Case dbInteger
    GetType = "dbInteger"
    GetType = "int("

    Case dbLong
    GetType = "dbLong"
    GetType = "int("

    Case dbLongBinary
    GetType = "dbLongBinary"

    Case dbMemo
    GetType = "dbMemo"

    Case dbNumeric
    GetType = "dbNumeric"

    Case dbSingle
    GetType = "dbSingle"

    Case dbText
    GetType = "dbText"
    GetType = "varchar("

    Case dbTime
    GetType = "dbTime"
    GetType = "datetime"


    Case dbTimeStamp
    GetType = "dbTimeStamp"
    GetType = "datetime"

    Case dbVarBinary
    GetType = "dbVarBinary"
End Select
End Function
