Public Class ResetPasswordEmail
    Private Sub btnBack_Click(sender As Object, e As EventArgs) Handles btnBack.Click
        Me.Hide()
        Dim startupForm As New StartupPage()
        startupForm.Show()
    End Sub
End Class