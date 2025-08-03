Imports System.Data.OleDb


Public Class LoginPage
    Private Sub btnLogin_Click(sender As Object, e As EventArgs) Handles btnLogin.Click
        Dim conn As New OleDbConnection("Provider=Microsoft.ACE.OLEDB.12.0;Data Source=" & Application.StartupPath & "\UserDB.accdb;")
        Dim cmd As New OleDbCommand("SELECT COUNT(*) FROM Users WHERE Email=@u AND Password=@p", conn)

        cmd.Parameters.AddWithValue("@u", txtEmail.Text)
        cmd.Parameters.AddWithValue("@p", txtPassword.Text)

        conn.Open()
        Dim count As Integer = Convert.ToInt32(cmd.ExecuteScalar())
        conn.Close()

        If count > 0 Then
            MessageBox.Show("Login successful!")
        Else
            MessageBox.Show("Invalid username or password.")
        End If
    End Sub

    Private Sub btnGoToRegister_Click(sender As Object, e As EventArgs) Handles btnGoToRegister.Click
        Dim reg As New RegisterPage()
        reg.Show()
        Me.Hide()
    End Sub


End Class
